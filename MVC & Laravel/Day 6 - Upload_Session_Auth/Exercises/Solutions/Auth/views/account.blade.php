<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>User's informations</h2>
    <p><strong>First name : </strong> {{ $user->first_name }} </p>
    <p><strong>Last name : </strong>{{ $user->last_name }}</p>
    <p><strong>City : </strong>{{ $user->city }}</p>
    <p><strong>Postal code : </strong>{{ $user->postal_code }}</p>
    <p><strong>Email : </strong>{{ $user->email }}</p>
</body>

</html>
