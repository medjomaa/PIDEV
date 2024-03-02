<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthManager extends Controller
{
    public function showDashboard()
{
    return view('produit'); // Replace 'yourViewNameHere' with the actual name of your Blade file
}
    function login(){
        return view('login');
    }
    function registration(){
        return view('registration');

    }
    function loginPost(request $request){
        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error","login details are not valid");
        

    }
    function registrationPost(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:users',
            'password' => 'required'
        ]);
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration')->with("erreur","registration failed please try again"));

    }
    return redirect(route('login'))->with("success","registration success,login to access the app");
}

function logout() {
    Session::flush();
    Auth::logout();
    return redirect(route('login'));
}

   
}
