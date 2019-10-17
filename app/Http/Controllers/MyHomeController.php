<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHomeController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function myHome(){
        $user = auth()->user();
        return view('myHome', ['name' => $user->name]);
    }
}
