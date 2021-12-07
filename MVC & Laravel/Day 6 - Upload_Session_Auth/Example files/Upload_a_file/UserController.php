<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_submit(Request $request)
    {
        session(['email' => $request->email]);

        return 'Login successfully';
    }

    // Upload : Display the form
    public function upload_file()
    {
        return view('register');
    }

    // Submit the form
    public function upload_file_submit(Request $request)
    {
        // File validation
        $request->validate([
            'myFile' => 'required|mimes:jpeg,pdf'
        ]);

        // Rename the file with timestamp
        $fileName = time() . '.' . $request->myFile->extension();

        // Save the public path
        $publicPath = public_path('uploads');

        // Save the file in the public/uploads folder
        $request->myFile->move($publicPath, $fileName);
    }
}
