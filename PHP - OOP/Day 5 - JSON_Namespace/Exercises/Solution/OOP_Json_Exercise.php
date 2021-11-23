<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	if (isset($_POST['submitBtn'])) {
		require_once 'User.php';

		$user = new User($_POST['name'], $_POST['email']);
		$json = json_encode($user, JSON_PRETTY_PRINT);

		$fHandle = fopen('users.json', 'w');
		fwrite($fHandle, $json);
		fclose($fHandle);

		echo 'Welcome, user';
	}
	?>
	<form action="" method="POST">
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="email" placeholder="Email">
		<input type="submit" value="Submit" name="submitBtn">
	</form>
</body>

</html>