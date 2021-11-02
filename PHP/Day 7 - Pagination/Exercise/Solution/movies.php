<?php

// Initialize empty movies array
$movies = array();

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Did I connect successfully ? 
if ($conn) {

    // RETRIVE THE CURRENT PAGE NUMBER
    if (isset($_GET['page']))
        $page = $_GET['page'];
    else
        $page = 1;

    // 2. Prepare the query
    // Click on the search btn
    $limit = 2 * ($page - 1);
    $query = "SELECT * FROM movies LIMIT $limit, 2";

    if (isset($_POST['searchBtn'])) {
        // Display search results
        $query = 'SELECT * FROM movies WHERE title LIKE "%' . $_POST['searchbox'] . '%"';
    }

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch the results in a associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // Count how many pages
    $query = "SELECT COUNT(*) as total_movies FROM movies";
    $result = mysqli_query($conn, $query);
    $res = mysqli_fetch_assoc($result);

    $total_pages = $res['total_movies'] / 2;
} else {
    echo 'Pb with connection !';
}

// Close the connection (you can close anywhere in the file)
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies page</title>
</head>

<body>
    <?php include_once 'nav.html'; ?>

    <h2>Movies list</h2>

    <form method="POST">
        <input type="text" name="searchbox" placeholder="Your search">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <?php foreach ($movies as $movie) : ?>
        <hr>

        <img src="<?= $movie['poster']; ?>" alt="" width="100px">

        <p>
            <strong>Title :</strong>
            <!-- Same thing as echo -->
            <?= $movie['title']; ?>
        </p>


        <p>
            <strong>Views :</strong>
            <?php echo $movie['views']; ?>
        </p>

        <a href="movie.php?id=<?= $movie['id'] ?>">Detail page</a>
    <?php endforeach; ?>


    <div class="pagination">
        <?php
        // PREVIOUS / NEXT BUTTONS

        // Only display previous if not on the first page
        if ($page > 1) {
            $previousPage = $page - 1;
            echo "<a href='movies.php?page=$previousPage'>Previous</a>";
        }

        // Only display if not on the last page
        if ($page < $total_pages) {
            $nextPage = $page + 1;
            echo "<a href='movies.php?page=$nextPage'>Next</a>";
        }

        ?>

    </div>
</body>

</html>