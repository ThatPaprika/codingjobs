@extends('mytemplate')

@section('title', 'Inserting a book')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="price" placeholder="Price"><br>
        <input type="submit" value="Insert a new book">
    </form>
@endsection
