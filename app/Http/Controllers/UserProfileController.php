<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
    
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            'profile_image' => 'nullable|url',
            'profile_image_file' => 'nullable|image|max:2048', // Accept only images up to 2MB
        ]);
    
        // Update user information
        $user->name = $request->name;
        $user->email = $request->email;
    
        if ($request->hasFile('profile_image_file')) {
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
