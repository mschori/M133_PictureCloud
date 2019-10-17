<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function library(){
        $user = auth()->user();
        $email = $user->email;

        $images = [];
        $filesInFolder = \File::files('images/' . $email);

        foreach($filesInFolder as $path)
        {
            $images[] = pathinfo($path);
        }

        return view('library')->with('images', $images)->with('email', $email)->with('name', $user->name);
    }

}
