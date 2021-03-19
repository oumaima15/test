<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){
        return ( 'pages.index');
        
        
    }

    public function about(){
        return view('pages.about');
    }
    
    public function services(){
        return view('pages.services');
    }
}
