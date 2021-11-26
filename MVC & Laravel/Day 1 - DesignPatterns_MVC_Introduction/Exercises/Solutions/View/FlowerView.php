<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flowers List</title>
</head>

<body>
    <?php require_once './View/nav.html'; ?>


    <h3>flowers List</h3>

    <?php foreach ($flowers as $flower) : ?>
        <p>
            <strong>Name :</strong>
            <?= $flower->get_name(); ?>
            <br>

            <strong>Price : </strong>
            <?= $flower->get_price(); ?>

            <a href="index.php?page=flowers&id=<?= $flower->get_id(); ?>">Read more</a>
            <hr>
        </p>
    <?php endforeach; ?>
</body>

</html>