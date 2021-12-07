@extends('mytemplate')

@section('title', 'Edit book')

@section('content')
    @if ($message = Session::get('success'))
        <p style="color:green">{{ $message }}</p>
    @endif

    @if ($message = Session::get('error'))
        <p style="color:red">{{ $message }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Title" value="{{ $book->title }}"><br>
        <input type="text" name="price" placeholder="Price" value="{{ $book->price }}"><br>
        <select name="type">
            <option <?php if ($book->type == 'thriller') {
    echo 'selected';
} ?> value="thriller">Thriller</option>

            <option <?php if ($book->type == 'fantasy') {
    echo 'selected';
} ?> value="fantasy">Fantasy</option>
        </select><br>
        <input type="submit" value="Update the book">
    </form>
@endsection
