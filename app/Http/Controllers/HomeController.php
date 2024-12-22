<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function blog_single(){
        return view('blog_single');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    
    
}
