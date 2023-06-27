<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscribe;
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
            'name' => 'required|max:255',
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
        return view('admin.inbox', [
            'contacts' => Contact::all()
        ]);
    }
    public function Delete()
    {
        $list = request()->input();
        $deleteUser = Contact::find($list['id']);
        $deleteUser->delete();
        return redirect('dashboard');
    }
    public function getReq()
    {

        $done = request()->all();
        dd($done);

        // $attribute = request()->validate([
        //     'email' => 'required|email|max:255',
        // ]);

        // Subscribe::create($attribute);

        // return redirect('/');
    }

    public function payment()
    {
        return view('payment');
    }
}
