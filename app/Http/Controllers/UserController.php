<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    
    //Show register form
    public function create()
    {
        return view('users.register');
    }

    public function createAdmin(){

        if (auth()->user()->role != 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        return view('users.createAdmin');
    }

    //Add user to database
    //!modifications below to allow to store pictures
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'profile_picture' => ['image','mimes:png,jpg,jpeg','max:2048'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => [
                'required',
                'confirmed',
                'min:8'
            ],
            
        ]);

        //if request has a photo, store it to the public photo folder. Laravel will automatically create this folder if needed.
        if($request->hasFile('profile_picture'))
        {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('photos', 'public');
        };
        //remove _ from prefer not to say gender
        $formFields['gender'] = str_replace('_', ' ', $formFields['gender']);

        //store user role as member
        $formFields['role'] = 'Member';
        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in Successfully!');

    }

    public function logout(Request $request)
    {
        //Log user out
        auth()->logout();

        //This will remove the authenticated user's session data from the storage
        //Additionally, it will regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User logged out Successfully!');
    }

    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //Attempt() tries to match the content of the $formFields to a user in our users table
        //If it finds a match, it will log the user in and return true
        if (auth()->attempt($formFields)) {
            //Generate a new session (to store the logged user data)
            $request->session()->regenerate();

            // redirect to the home page
            return redirect('/')->with('message', 'User logged in successfully!');
        }

        // If reached here, the credentials are incorrect
        return back()->withErrors(['password' => 'Incorrect email or password']);
    }

    public function manage(){

        if (auth()->user()->role != 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        return view('users.manage',[
            //'users' => auth()->user()->users,
            'users' => User::latest()->filter(request(['search']))->get(),

        ]);
    }

    public function destroy($id){
        // TODO: Allow users to delete their own account
        if (auth()->user()->role != 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        //Fetch the user to be deleted
        $user= User::find($id);

        //Delete the user
        $user->delete();

        //Redirect to the manage users
        return redirect('/users/manage')->with('message', 'User deleted Successfully!');
    }

    public function editAdmin($id){

        if (auth()->user()->role != 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        $user = User::find($id);

        return view('users.editAdmin', [
            'user' => $user
        ]);
    }

    //Show only the specific user profile
    public function show($id){
        return view('users.show', [
            'user' => User::find($id)
        ]);
    }

    //show edit page
    public function edit($id)
    {
        $user = User::find($id);
        //Make sure logged in user is the user
        if($user->id!= auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function updateAdmin(Request $request, $id){

        if (auth()->user()->role != 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        //Fetch the user to be updated
        $user = User::find($id);      

        //Validate the form fields
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => [
                'required', Password::min(8),
                'confirmed'
            ],
        ]);

        //upload the new picture
        if($request->hasFile('profile_picture'))
        {
            //Replace the old picture with the new one. Delete the old picture from the storage.
            $formFields['profile_picture'] = $request->file('profile_picture')->store('photos', 'public');
        }

        $formFields['password'] = bcrypt($formFields['password']);

        //remove _ from prefer not to say gender
        $formFields['gender'] = str_replace('_', ' ', $formFields['gender']);

        //Update the user
        $user->update($formFields);

        //Redirect to the manage users page
        return redirect('/users/manage')->with('message', 'User updated Successfully!');
    }     

    //update the user information
    public function update(Request $request,$id){

         //Fetch the user to be updated
        $user = User::find($id);

        //Make sure logged in user is the user
        if($user->id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }        

        //Validate the form fields
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'profile_picture' => ['image','mimes:png,jpg,jpeg','max:2048'],
            'email' => ['required', 'email'],
            'password' => [
                'required', Password::min(8),
                'confirmed'
            ],
        ]);
      
        $formFields['password'] = bcrypt($formFields['password']);

        //upload the new picture
        if($request->hasFile('profile_picture'))
        {
            //Replace the old picture with the new one. Delete the old picture from the storage.
            $formFields['profile_picture'] = $request->file('profile_picture')->store('photos', 'public');
        }

        //remove _ from prefer not to say gender
        $formFields['gender'] = str_replace('_', ' ', $formFields['gender']);

        //Update the user
        $user->update($formFields);

        //Redirect to the user detail page
        return redirect('profile/'. $user->id)->with('message', 'Profile updated Successfully!');
    }

    public function attendedEvents(User $user)
    {
        // Get the attended results of the user
        $attendedResults = $user->results;

        dd($attendedResults);
        // Sort the attended results by finish time
        $sortedResults = $attendedResults->sortBy('finish_time');

        // Initialize the rank variable
        $rank = 1;

        // Assign the rank to each result
        foreach ($sortedResults as $result) {
            // Set the rank property of each result object
            $result->rank = $rank;
            // Increment the rank for the next result
            $rank++;
        }

        // Return the view with the user and sorted results
        return view('users.show', compact('user', 'sortedResults'));
    }

}
