<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('admin.newMember');
    }

    public function store()
    {
        $done = request()->all();
        ddd($done);
        // $attribute = request()->validate([
        //     'name' => 'required|min:6|max:255',
        //     'email' => 'required|email|max:255',
        //     'subject' => 'required|min:10|max:255',
        //     'body' => 'required',
        // ]);

        // Contact::create($attribute);
        // // ddd($contact);

        // return redirect('/');
    }

}
