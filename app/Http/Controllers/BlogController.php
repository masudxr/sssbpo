<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog1()
    {
        return view('blog.blog1');
    }

    public function showBlog2()
    {
        return view('blog.blog2');
    }

    public function team()
    {
        return view('teams');
    }
}
