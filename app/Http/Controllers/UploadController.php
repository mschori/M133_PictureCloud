<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function upload(Request $request){
        $user = auth()->user();

        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images/' . $user->email);
        $image->move($destinationPath, $input['imagename']);

        return redirect('/library');
    }
}
