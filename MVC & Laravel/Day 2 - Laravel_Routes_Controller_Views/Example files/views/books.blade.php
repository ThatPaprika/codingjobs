@extends('mytemplate')

@section('title', 'Books List')

@section('content')
    <h2>Books</h2>

    @if (!empty($books))
        @foreach ($books as $book)
            <strong>Title : </strong>{{ $book->title }}<br>
            <strong>Price : </strong>{{ $book->price }}<br>
            <a href="{{ route('books.details', [$book->id]) }}">Detail page</a>
            <hr>
        @endforeach
    @else
        <p>No books in my DB.</p>
    @endif
@endsection
