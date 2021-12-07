@extends('mytemplate')

@section('title', 'Register Form')

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

    <form method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="file" name="myFile"><br>
        <input type="submit" value="Register">
    </form>
@endsection
