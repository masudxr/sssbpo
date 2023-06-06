<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show()
    {
        return view('services.design');
    }
    public function showCallService()
    {
        return view('services.call');
    }
    public function showDataService()
    {
        return view('services.data');
    }
    public function showWebService()
    {
        return view('services.web');
    }
    public function showVirtualService()
    {
        return view('services.virtual');
    }
}
