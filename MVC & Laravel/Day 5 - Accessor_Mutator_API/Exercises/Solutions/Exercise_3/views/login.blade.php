@extends('mytemplate')

@section('title', 'Login')

@section('content')
    <form method="post">
        @csrf
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="submit" value="Login">
    </form>
@endsection
