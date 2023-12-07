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
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => [
                'required', Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(2),
                'confirmed'
            ],
            
            
        ]);

        //if request has a photo, store it to the public photo folder. Laravel will automatically create this folder if needed.
        if($request->hasFile('profile_picture'))
        {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('photos', 'public');
        };

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
            return redirect('/')->with('message', 'User logged in Successfully!');
        }

        //If it doesn't find a match send error
        return back()->withErrors(['login' => 'Invalid Credentials']);

    }
}
