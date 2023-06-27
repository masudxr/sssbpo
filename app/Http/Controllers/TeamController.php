<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('admin.newMember');
    }

    public function store()
    {
        // $done = request()->input();
        // ddd($done);
        $attribute = request()->validate([
            'name' => 'required',
            'title' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'join_date' => 'required'
        ]);

        // dd($attribute);
        Team::create($attribute);
        // // ddd($contact);
        // 
        return redirect('/dashboard');
    }
    public function members()
    {
        return view('admin.members', [
            'members' => Team::all()
        ]);
    }

    public function edit()
    {
        $hi = request()->all();
        return view('admin.edit', [
            'members' => Team::find($hi)
        ]);
    }

    public function update()
    {
        $list = request()->input();

        // ddd($list);

        $updateUser = Team::find($list['id']);
        $updateUser->name = request()->input('name');
        $updateUser->email = request()->input('email');
        $updateUser->title = request()->input('title');
        $updateUser->address = request()->input('address');
        $updateUser->phone = request()->input('phone');
        $updateUser->update();
        return redirect('dashboard');
    }

    public function Delete()
    {
        $list = request()->input();
        $deleteUser = Team::find($list['id']);
        $deleteUser->delete();
        return redirect('inbox');
    }
    public function home()
    {
        return view('admin.dash', [
            'members' => Team::all()
        ]);
    }
}
