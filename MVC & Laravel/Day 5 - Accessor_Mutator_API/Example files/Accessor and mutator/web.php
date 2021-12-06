<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ApiController;

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
    return redirect('/books');
});


// Books routes
Route::get('/books', [BookController::class, 'index']);

// Show the form :
Route::get('/books/create', [BookController::class, 'create']);
// Submit the form :
Route::post('/books/create', [BookController::class, 'store']);

// Show the form : 
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
// Submit the form : 
Route::put('/books/{id}/edit', [BookController::class, 'update']);

Route::get('/books/{id}/delete', [BookController::class, 'destroy'])->name('books.delete');;


Route::get('/books/{id}', [BookController::class, 'show'])->name('books.details');
//Route::resource('books', BookController::class);

Route::get('/authors',  [AuthorController::class, 'index']);

Route::get('/movies',  [MovieController::class, 'index']);
Route::get('/movies/{id}',  [MovieController::class, 'show']);


Route::get('/api/movies',  [ApiController::class, 'movies']);
Route::get('/api/movies/title={title}',  [ApiController::class, 'moviesByTitle']);


Route::get('/read-api',  [ApiController::class, 'read_api']);
// /api/movies/title=jaws