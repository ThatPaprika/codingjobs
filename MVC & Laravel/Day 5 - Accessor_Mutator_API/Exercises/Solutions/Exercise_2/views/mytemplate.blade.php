<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/books">Books</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="/books/create">Create a book</a>
            </li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>My footer</footer>
</body>

</html>
