<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //functions 
    public function index(){
        $movies = [];
        return view('movies.index', compact('movies'));
    }
}
