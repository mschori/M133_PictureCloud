<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHomeController extends Controller
{

    // Check if logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Render myHome-View and send username as 'name'
    public function myHome()
    {
        $user = auth()->user();
        return view('myHome', ['name' => $user->name]);
    }
}
