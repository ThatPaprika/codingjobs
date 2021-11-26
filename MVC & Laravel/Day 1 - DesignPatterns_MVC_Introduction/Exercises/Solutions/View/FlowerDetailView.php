<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flower detail</title>
</head>

<body>
    <?php require_once './View/nav.html'; ?>

    <div>
        <strong>Name :</strong>
        <?= $flower->get_name(); ?>
        <br>

        <strong>Price : </strong>
        <?= $flower->get_price(); ?>

    </div>
</body>

</html>