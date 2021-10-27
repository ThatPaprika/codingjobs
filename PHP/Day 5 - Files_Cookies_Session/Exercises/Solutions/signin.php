<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign-In Form</title>
</head>

<body>

  <?php
  if (isset($_POST['submitBtn'])) {
    $file_handle = fopen('users.txt', 'r');
    $found = false;
    $passwordMatch = false;

    while (!feof($file_handle)) {
      // Get the current line whit all user informations
      $currentLine = fgets($file_handle);

      // Make it an array to separate mail and password
      $currentUser = explode(';', $currentLine);

      if ($currentUser[0] == $_POST['email']) {
        $found = true;

        if ($currentUser[1] == $_POST['password']) {
          $passwordMatch = true;
        }
        break;
      }
    }

    if ($found) {
      if ($passwordMatch) {
        echo 'Welcome ! Both mail and password matches';
      } else {
        echo 'Mail found but passwords doesnt match';
      }
    } else {
      echo "Email is not in the users list";
    }
  }

  ?>


  <form action="" method="post">
    <input type="text" name="email" placeholder="Your email"><br>
    <input type="password" name="password" placeholder="Your password"><br>
    <input type="submit" name="submitBtn" value="SignIn">
  </form>
</body>

</html>