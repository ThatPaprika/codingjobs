<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Book;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    /* EXAMPLE MOVIE API SECTION */

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

    /* BOOK API SECTION */
    public function books()
    {
        $books = Book::all();
        return $books->toJson(JSON_PRETTY_PRINT);
    }

    public function books_amount($amount)
    {
        $books = Book::limit($amount)->get();
        return $books->toJson(JSON_PRETTY_PRINT);
    }

    public function books_type($type)
    {
        $books = Book::where('type', $type)->get();
        // Same thing, other syntax : $books = Book::where('type', '=', $type)->get();

        return $books->toJson(JSON_PRETTY_PRINT);
    }
}
