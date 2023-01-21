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
    public function signupmethod()
    {
        return view('signup');
    
        
    }
    public function forgottenmethod()
    {
        return view('forgotten');
    
        
    }
    public function bookmarmethod()
    {
        return view('bookmark');
    
        
    }
    public function exploremethod()
    {
        return view('explore');
    
        
    }
    public function listmethod()
    {
        return view('list');
    
        
    }
    public function messagemethod()
    {
        return view('message');
    
        
    }
    public function notificationsmethod()
    {
        return view('notifications');
    
        
    }
    public function profilemethod()
    {
        return view('profile');
    
        
    }
    public function moremethod()
    {
        return view('more');
    
        
    }
}
