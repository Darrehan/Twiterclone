<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class twitercontroller extends Controller
{
    public function loginmethod()
    {
        return view('login');
        
    }
    public function homemethod()
    {
        return view('home');
        
    }
    public function logoutmethod()
    {
        return view('logout');
        
    }
}
