<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index(Request $request)
    {
        // Ensure only admins can access this page
        if (!auth()->user()->isAdmin1()) {
            abort(403); // Forbidden access if not admin
        }

        $searchQuery = $request->input('query');  // Correctly retrieve the search query

        $users = User::query()
                     ->when($searchQuery, function ($query) use ($searchQuery) {
                         // Use the $searchQuery variable, which contains the input string
                         return $query->where('name', 'LIKE', "%{$searchQuery}%")
                                      ->orWhere('email', 'LIKE', "%{$searchQuery}%");
                     })
                     ->paginate(10);

        return view('role', compact('users'));
    }

 
    public function updateRole(Request $request, User $user)
    {
        if (!auth()->user()->isAdmin1()) {
            abort(403);
        }

        $validated = $request->validate(['role' => 'required|string']);
        $user->update(['role' => $validated['role']]);
        
        return redirect()->route('admin.users.index')->with('success', 'User role updated successfully!');
    }
}
