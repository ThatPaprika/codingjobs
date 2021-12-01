<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::select('SELECT * FROM books');

        return view('books', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        // Validations
        $request->validated();

        $result = DB::insert("INSERT INTO books(title, price) VALUES(?, ?)", [$request->title, $request->price]);

        if ($result)
            return 'Saved the book in the DB.';
        else
            return 'Something wrong with the DB.';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Display book with id : ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = DB::select('SELECT * FROM books WHERE id = ' . $id);

        return view('edit-book', ['book' => $books[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBookRequest $request, $id)
    {
        // Validations
        $request->validated();

        $result = DB::update('UPDATE books SET title = ?, price = ? WHERE id = ?', [$request->title, $request->price, $id]);

        if ($result)
            return back()->with('success', 'Updated in the DB');
        else
            return back()->with('error', 'Something wrong with the DB');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::delete('DELETE FROM books WHERE id = ?', [$id]);

        if ($result)
            return back()->with('success', 'Book was deleted from the DB');
        else
            return back()->with('error', 'Something wrong with the DB.');
    }
}
