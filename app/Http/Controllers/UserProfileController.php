<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserProfileController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('user-manager', compact('user'));
    }

    /**
     * Update the user's profile information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user
    
        try {
            // Validate the request with custom messages
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'password' => 'nullable|min:6|confirmed',
                'profile_image' => 'nullable|url',
                'profile_image_file' => 'nullable|image|max:2048', // Accept only images up to 2MB
            ], [
                'password.confirmed' => 'The password and confirmation password do not match.',
                'profile_image_file.image' => 'The file must be an image.',
                'profile_image_file.max' => 'The image may not be greater than 2048 kilobytes.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    
        // Update user information
        $user->name = $request->name;
        $user->email = $request->email;
    
        if ($request->hasFile('profile_image_file') && $request->file('profile_image_file')->isValid()) {
            $fileName = time().'.'.$request->profile_image_file->extension();
            $request->profile_image_file->move(public_path('uploads'), $fileName);
            $user->profile_image = url('uploads/' . $fileName);
        } elseif ($request->input('profile_image')) {
            $user->profile_image = $request->profile_image;
        }
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}

