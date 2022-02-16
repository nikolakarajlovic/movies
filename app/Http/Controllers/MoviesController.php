<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    
        public function index(){
            $movies = Movie::all();
            return view('movies',compact('movies'));
    }

    public function show($id){
        $movie=Movie::findOrFail($id);
        return view('movie',compact('movie'));
     }

     public function create(){
         
         return view('create-movie');
     }
     
}
