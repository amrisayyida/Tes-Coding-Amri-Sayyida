<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Login Page'
        );

        return view('index', $data);
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email' , 'password')))
        {
            return redirect('/home')->with(key: 'login', value:true);
        };
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/')->with(key: 'logout', value:true);
    }

}