<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register form</title>
</head>

<body>
    <form method="post">
        @csrf
        <input type="text" name="first_name" placeholder="First name"><br>
        <input type="text" name="last_name" placeholder="Last name"><br>
        <input type="text" name="city" placeholder="City"><br>
        <input type="text" name="postal_code" placeholder="Postal code"><br>
        <input type="checkbox" name="role"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="confirmPassword" placeholder="Confirm password"><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>
