<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Exercise 4</title>
</head>

<body>
    <h3>AJAX Exercise 4</h3>

    <?php
    // Do I have an ID ? If I don't, don't display the form
    if (!isset($_GET['id'])) {
        echo 'You try to access something forbidden<br>';
        die();
    }

    $id = $_GET['id'];

    // Make sure id is numeric/number
    if (!is_numeric($id)) {
        echo 'ID should be a number<br>';
        die();
    }

    //1. Retrieve movie's information
    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
    $query = "SELECT * FROM movies WHERE id = $id";
    $results = mysqli_query($conn, $query);
    $movie = mysqli_fetch_assoc($results);

    ?>



    <div id="result">...</div>

    <form method="post">
        <input type="hidden" name="id" value="<?= $movie['id'] ?>"><br>
        <input type="text" name="title" placeholder="Movie Title" value="<?= $movie['title'] ?>"><br>
        <input type="text" name="views" placeholder="Movie Views" value="<?= $movie['views'] ?>"><br>
        <input type="number" name="director_id" placeholder="Director ID" value="<?= $movie['director_id'] ?>"><br>
        <input type="text" name="poster" placeholder="Poster" value="<?= $movie['poster'] ?>"><br>

        <input id="myBtn" name="submitBtn" type="submit" value="Edit movie">
    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $('#myBtn').click(function(e) {
            // 'Stop' the form
            e.preventDefault();

            // Ajax call : ask php to UPDATE
            $.ajax({
                    method: 'post',
                    url: 'update-movie.php',
                    data: $('form').serialize()
                })
                .done(function(result) {
                    // If AJAX Call worked
                    $('#result').html(result);
                })
                .fail(function(result) {
                    // Fail means : file not found, 500 errors.
                    // Fail doesnt mean : syntax error in PHP
                    console.log('AJAX FAILED.');
                })
        });
    </script>
</body>

</html>