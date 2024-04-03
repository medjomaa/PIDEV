<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{


        public function __construct()
    {
        // $this->middleware('auth'); // Ensure user is authenticated
        
        // Apply additional middleware only to create, update, and delete methods.
        $this->middleware(function ($request, $next) {
            $user = Auth::user();
            // Check if the authenticated user is an admin
            if ($user->name == 'admin' && $user->email == 'admin@gmail.com') {
                return $next($request);
            } else {
                // Redirect if the user is not an admin and flash a message to the session
                return redirect('/products')->with('error', 'Only admins can create, edit, or delete products.');
            }
        })->only(['create', 'store', 'edit', 'update', 'destroy']);
    }
    public function details($id)
    {
        $product = Product::findOrFail($id);
        return view('products.details', compact('product'));
    }
    
    public function index()
    {
        // Retrieve all products
        $products = Product::all();
        
        return view('products.index', compact('products'));
       
    }

    public function productshow()
    {
        // Retrieve all products
        $products = Product::all();
        
        return view('products.productshow', compact('products'));
       
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|url', // Ensure it's a valid URL
            'price' => 'required|numeric',
        ]);
    
        // Directly use the image URL from the request
        $validatedData['image'] = $request->image;
    
        Product::create($validatedData);
    
        return redirect(route('products.index'))->with('success', 'Product created successfully.');
    }
    
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    
    
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|url', // Ensure it's a valid URL
        ]);
    
        $product->update($validatedData);
    
        return redirect(route('products.index'))->with('success', 'Product updated successfully.');
    }
    

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'))->with('success', 'Product deleted successfully.');
    }

    public function purchase($id)
    {
        // Logic to handle the purchase action
        // Retrieve the product using the $id
        // Add the product to the shopping cart or perform any other necessary actions

        return redirect()->back()->with('success', 'Product purchased successfully!');
    }

}