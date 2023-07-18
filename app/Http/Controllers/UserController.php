<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    //Show Register/Create Form
    public function create(){
        return view('users.register');
    }

    //Create New User
    public function store(Request $request)
{
    $formFields = $request->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => [
            'required',
            'confirmed',
            'min:8',
            'string',
            'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*_])[a-zA-Z0-9!@#$%^&*_]+$/',
            'not_regex:/^(?:\d+|[a-zA-Z]+)$/',
        ],
    ], [
        'password.regex' => 'The password must contain at least one numeric digit and one special character.',
        'password.not_regex' => 'The password must contain a combination of letters, numbers, and special characters.',
    ]);
        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in successfully');
    }
}
