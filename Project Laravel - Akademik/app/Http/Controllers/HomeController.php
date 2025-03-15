<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $data = array(
            // 'active_side' => 'active',
            // 'active_sub' => 'active',
            // 'active_user' => 'active',
            'active_home' => 'active',
            'title'       => 'Dashboard',
            'breadcumb1'   => 'Dashboard',
            'breadcumb2'   => 'Dashboard'
        );

        return view('home', $data);
    }
}
