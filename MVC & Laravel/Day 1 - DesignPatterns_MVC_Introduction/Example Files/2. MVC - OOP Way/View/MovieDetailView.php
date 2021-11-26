<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie detail</title>
</head>

<body>
    <div>
        <img src="<?= $movie->get_poster(); ?>" width="100px">
        <br>

        <strong>Title :</strong>
        <?= $movie->get_title(); ?>
        <br>

        <strong>Date : </strong>
        <?= $movie->get_date(); ?>

    </div>
</body>

</html>