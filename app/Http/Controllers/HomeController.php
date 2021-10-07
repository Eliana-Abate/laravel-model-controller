<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //functions 
    public function index(){
        return view('home');
    }
}
