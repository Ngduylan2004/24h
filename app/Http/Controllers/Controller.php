<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use home;
class Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function projects(){
        return view('projects');
    }

    public function contact(){
        return view('contact');
    }
}