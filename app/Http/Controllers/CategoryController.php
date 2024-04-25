<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('user')->get();

        return view('categories.index', compact('categories'));
    }

        public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }



public function myMethod()
{
    // Check if the user is authenticated
    if (Auth::check()) {
        // The user is logged in
        $userName = Auth::user()->name;
        // Continue with your logic, now safely using $userName
    } else {
        // User is not authenticated, redirect with a message
        return redirect('/registration')->with('error', 'You need to create an account or log in.');
    }
}

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
            'comment' => 'required|unique:categories',
        ]);

        $requestData = $request->all();
        $requestData['user_id'] = Auth::id(); // Adds the ID of the currently authenticated user

        Category::create($requestData);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
    public function istrainer() {
        $user = Auth::user();
        return $user->role == 'trainer';  // Check if the user is an admin by role
    }
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'comment' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
    public function isAdmin() {
        $user = Auth::user();
        return  $this->$user->role == 'admin';  // Check if the user is an admin by email
    }
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
