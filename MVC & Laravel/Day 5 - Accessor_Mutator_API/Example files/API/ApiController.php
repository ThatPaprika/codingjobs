<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    // return all movies as JSON
    public function movies()
    {
        $movies = Movie::all();

        return $movies->toJson(JSON_PRETTY_PRINT);
    }

    public function moviesByTitle($title)
    {
        $movies = Movie::where('title', 'like', '%' . $title . '%')->get();

        return $movies->toJson(JSON_PRETTY_PRINT);
    }

    // read an API
    public function read_api()
    {
        $response = Http::get('https://api.magicthegathering.io/v1/cards');

        dd($response->object());
    }
}
