@extends('mytemplate')

@section('title', 'Books List')

@section('content')
    <h2>Books</h2>

    @if ($message = Session::get('success'))
        <p style="color:green">{{ $message }}</p>
    @endif

    @if ($message = Session::get('error'))
        <p style="color:red">{{ $message }}</p>
    @endif

    @if (!empty($books))
        @foreach ($books as $book)
            <strong>Title : </strong>{{ $book->title }}<br>
            <strong>Price : </strong>{{ $book->pricewitheuro }}<br>
            <strong>Type : </strong>{{ $book->type }}<br>
            <strong>Created at : </strong>{{ $book->createdat }}<br>
            <a href="{{ route('books.details', [$book->id]) }}">Detail page</a><br>
            <a href="{{ route('books.edit', [$book->id]) }}">Edit</a><br>
            <a href="{{ route('books.delete', [$book->id]) }}">Delete</a>
            <hr>
        @endforeach
    @else
        <p>No books in my DB.</p>
    @endif
@endsection
