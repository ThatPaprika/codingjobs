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

        foreach ($movies as $movie) {
            /*
             When calling '$movie->title', it actually call the Accessor (getter)
            */
            echo $movie->title . '<br>';
            echo $movie->views . '<br>';
            echo '<hr>';
        }
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        $movie->title = 'NEW TITLEEEEEE';

        dd($movie);
    }
}
