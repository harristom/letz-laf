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
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
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

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in Successfully!');
    }
}
