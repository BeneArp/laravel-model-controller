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
}


