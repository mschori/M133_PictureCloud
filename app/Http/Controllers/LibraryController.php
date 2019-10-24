<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    // Check if logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Render library-view and send images, email and username
    public function library()
    {
        $user = auth()->user();
        $email = $user->email;

        $images = [];
        $files_in_folder = \File::files('images/' . $email);

        foreach ($files_in_folder as $path) {
            $images[] = pathinfo($path);
        }

        return view('library')->with('images', $images)->with('email', $email)->with('name', $user->name);
    }

}
