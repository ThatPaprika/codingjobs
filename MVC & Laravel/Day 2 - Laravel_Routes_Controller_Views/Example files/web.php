<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
    ROUTES are all the available URL / Pages on your application
    It's basically what is in the adress bar.

*/

Route::get('/', function () {
    //return view('welcome');
    return 'Heyyyyyyy !';
});

Route::get('/movies', function () {
    return 'This is the list of all the movies.';
});

// I access my route likes this : localhost:8000/movie/3
Route::get('/movie/{id}', function ($id) {
    return 'This is the detail page. Id : ' . $id;
})->name('movie.details');

// How to use a controller : call the example() method from TestController
Route::get('/example', [TestController::class, 'example']);

// Books routes
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/create', [BookController::class, 'store']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::put('/books/{id}/edit', [BookController::class, 'update']);
Route::get('/books/{id}/delete', [BookController::class, 'destroy']);
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.details');
//Route::resource('books', BookController::class);
