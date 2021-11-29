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
            <li>Link1</li>
        </ul>
        <ul>
            <li>Link2</li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>My footer</footer>
</body>

</html>
