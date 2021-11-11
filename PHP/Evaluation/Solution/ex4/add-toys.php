<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new toy</title>
</head>

<body>

    <?php require_once 'nav.html'; ?>

    <h3>Insert a toy in DB</h3>

    <?php

    // Insert only when form is submitted
    if (isset($_POST['insertBtn'])) {

        $errors = array();

        // name, price and type must not be empty !
        if (empty($_POST['name']))
            $errors['name'] = 'Name is mandatory<br>';

        if (empty($_POST['price']))
            $errors['price'] = 'Price is mandatory<br>';
        elseif (!is_numeric($_POST['price']))
            $errors['price'] = 'Price must be a number !<br>';

        if (empty($_POST['type']))
            $errors['type'] = 'Type is mandatory<br>';

        // Insert only if no errors
        if (empty($errors)) {

            // Easier for the query
            $name = trim($_POST['name']);
            $price = trim($_POST['price']);
            $photo = trim($_POST['photo']);
            $type = trim($_POST['type']);
            $description = trim($_POST['description']);

            $conn = mysqli_connect('localhost', 'root', '', 'christmas_shop');
            $query = "INSERT INTO toys(name, price, photo, type, description)
            VALUES('$name', $price, '$photo', '$type', '$description')";

            // 2. Execute the query
            $result = mysqli_query($conn, $query);

            // INSERT/UPDATE/DELETE returns true OR false
            if ($result)
                echo 'Successfully inserted in the DB';
            else
                echo '<span style="color:red">Problem inserting in the DB</span>';
        } else {
            foreach ($errors as $errorMsg) {
                echo "<span style='color:red'>$errorMsg</span>";
            }
        }
    }
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Toy's name"><br>
        <input type="text" name="price" placeholder="Toy's price"><br>
        <select name="type" id="types">
            <option value="">--Please choose an option--</option>
            <option value="dolls">Dolls</option>
            <option value="mechanic">Mechanic</option>
            <option value="puzzle">Puzzle</option>
        </select><br>

        <input type="text" name="photo" placeholder="Photo URL"><br>
        <textarea name="description" cols="30" rows="10" placeholder="Description"></textarea><br>
        <input type="submit" name="insertBtn" value="Insert toy">
    </form>
</body>

</html>