<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get()
    {
        return view('login.create');
    }

    public function store()
    {
        $done = request()->input();
        ddd($done);
        $attribute = request()->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'address' => 'required',
            'position' => 'required',
            'join_date' => 'required'
        ]);

        // dd($attribute);
        // User::create($attribute);
        // // ddd($contact);
        // 
        // return redirect('dashboard');
    }
}
