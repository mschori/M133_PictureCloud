<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function download($file_name) {
        $user = auth()->user();
        $file_path = public_path('images/' . $user->email . '/' . $file_name);
        return response()->download($file_path);
    }
}
