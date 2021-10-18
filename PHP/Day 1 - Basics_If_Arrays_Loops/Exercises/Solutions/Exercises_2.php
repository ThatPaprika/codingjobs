<?php

$avatar = 'banana.png';
$lastName = 'Guy';
$firstName = 'Banana';

$characteristics = array(
    'atk' => 10,
    'def' => 5
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character page</title>
</head>

<body>
    <h2>Character</h2>

    <p><strong>Last name : </strong> <?php echo $lastName; ?> </p>
    <p><strong>First name : </strong> <?= $firstName; ?> </p>

    <img src="<?php echo $avatar; ?>" alt="" width="100px">

    <?php

    if ($characteristics['atk'] > 9 or $characteristics['def'] > 9) {
        echo '<div class="alert">
                <strong>Congratulations !</strong> Your character is ready to fight.</strong>
            </div>';
    }

    ?>


</body>

</html>