<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitucionalController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function cases(){
        return view('cases');
    }

    public function contacts(){
        return view('contacts');
    }

    public function budget(){
        return view('budget');
    }
           
}
