<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store()
    {
        // $done = request()->all();
        // dd($done);
        $attribute = request()->validate([
            'name' => 'required|min:6|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|min:10|max:255',
            'body' => 'required',
        ]);

        Contact::create($attribute);
        // ddd($contact);

        return redirect('/');
    }

    public function show()
    {
        return view('admin.dashboard', [
            'contacts' => Contact::all()
        ]);
    }
}
