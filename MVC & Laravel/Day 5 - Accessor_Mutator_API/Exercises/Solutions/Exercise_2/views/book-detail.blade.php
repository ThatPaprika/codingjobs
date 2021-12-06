@extends('mytemplate')

@section('title', 'Book detail page')

@section('content')
    <h2>Book detail</h2>

    Title : {{ $book->title }}<br>
    Price : {{ $book->pricewitheuro }}<br>
    Type : {{ $book->type }}<br>
    Author : {{ $book->author->first_name }} {{ $book->author->last_name }}

@endsection
