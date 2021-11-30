@extends('mytemplate')

@section('title', 'Edit book')

@section('content')
    @if ($message = Session::get('success'))
        <p style="color:green">{{ $message }}</p>
    @endif

    @if ($message = Session::get('error'))
        <p style="color:red">{{ $message }}</p>
    @endif

    <form method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Title" value="{{ $book->title }}"><br>
        <input type="text" name="price" placeholder="Price" value="{{ $book->price }}"><br>
        <input type="submit" value="Update the book">
    </form>
@endsection
