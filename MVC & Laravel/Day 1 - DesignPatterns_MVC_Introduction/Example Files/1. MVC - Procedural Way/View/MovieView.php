<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Movies page</h3>
    <?php require_once 'View/nav.html'; ?>

    <?php foreach ($movies as $movie) : ?>
        <hr>
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

        <!-- Link to 'Movie detail' page, URL needs the id of the movie -->
        <a href="index.php?page=movies&id=<?= $movie['id']; ?>">Detail page</a>
    <?php endforeach; ?>
</body>

</html>