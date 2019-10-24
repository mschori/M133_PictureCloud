<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    // Check if logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Upload file into user-folder
    public function upload(Request $request)
    {
        $user = auth()->user();

        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destination_path = public_path('/images/' . $user->email);
        $image->move($destination_path, $input['imagename']);

        return redirect('/library');
    }
}
