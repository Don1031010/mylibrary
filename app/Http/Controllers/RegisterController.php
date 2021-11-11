<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class RegisterController extends Controller
{
    //
    public function create() {
        return view('register.create');
    }

    public function store() {
        // return request()->all();

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:5|unique:users,username',
            // 'username' => ['required','max:255', 'min:5', Rule::unique('users', 'username')], // not working why?
            'email' => 'required|email|max:255|unique:users,email',
            'password' => ['required', 'min:7', 'max:255'],
        ]);

        /*
         * two ways to hash user password before store to the database:
         * 1. $attributes['password'] = bcrypt($attributes['password']);
         * 2. use an elequont mutator in User model
         */
        // Illuminate\Support\Facades\Hash::check('password', $jane->password); // check a password against a hash

        $user = User::create($attributes);
        auth()->login($user);

        // session()->flash('success', 'Your account has been created.');
        return redirect('/')->with('success', 'Your account has been created.');
    }
}
