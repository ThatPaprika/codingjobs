<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieController extends Controller
{
    //eloquent / O.R.M
    public function index()
    {
        $movies = Movie::all();

        Movie::where('director_id', 1)
        ->orderBy('title')
        ->take(5)
        ->get();

        //dd($movies);

        foreach ($movies as $movie) {
            echo $movie->title . '<br>';
            echo $movie->views . '<br>';
            echo '<hr>';
        }
    }
}
