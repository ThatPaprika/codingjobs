<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;

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

    // Register : 
    public function register()
    {
        return view('register');
    }

    public function register_submit(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'myFile' => 'required|mimes:jpeg'
        ]);

        // Rename the file with timestamp
        $fileName = time() . '.' . $request->myFile->extension();

        // Save the public path
        $publicPath = public_path('uploads');

        // Save the file in the public/uploads folder
        $request->myFile->move($publicPath, $fileName);

        $user = new CustomUser;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->poster = $fileName;

        if ($user->save())
            return back()->with('success', 'User was created successfully');
        else
            return back()->with('error', 'Problem creating the user');
    }
}
