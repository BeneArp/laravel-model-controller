<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function film(){

        $movies = Movie::all();

        return view('film', compact('movies'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }

    public function movieDetails($id){
        $movie = Movie::find($id);

        return view('movieDetails', compact('movie'));
    }

    public function movieYear(){
        $movies = Movie::where('date', '>=', '1990-01-01')->get();

        return view('film', compact('movies'));
    }
}


