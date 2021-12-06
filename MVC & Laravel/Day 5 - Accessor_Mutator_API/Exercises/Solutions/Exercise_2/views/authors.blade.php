<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($authors as $author)
        First name : {{ $author->first_name }}<br>
        Last name : {{ $author->last_name }}<br>
        Books : <br>
        @foreach ($author->books as $book)
            Title : {{ $book->title }}<br>
        @endforeach
        <hr>
    @endforeach
</body>

</html>
