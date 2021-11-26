<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detail Page</title>
</head>

<body>

    <?php require_once 'View/nav.html'; ?>

    <img src="<?= $movie['poster']; ?>" alt="" width="100px">
    <p>
        <strong>Title :</strong>
        <!-- Same thing as echo -->
        <?= $movie['title']; ?>
    </p>


    <p>
        <strong>Date :</strong>
        <?php echo $movie['date_of_release']; ?>
    </p>
</body>

</html>