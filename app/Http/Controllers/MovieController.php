<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //functions 
    public function index(){
        
        $movies = Book::all();
        return view('movies.index', compact('movies'));
    }
}
