@extends('mytemplate')

@section('title', 'Register Form')

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="myFile">
        <input type="submit" value="Upload file">
    </form>
@endsection
