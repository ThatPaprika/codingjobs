<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a toy</title>
</head>

<body>

    <?php require_once 'nav.html'; ?>

    <h3>Edit a toy</h3>

    <?php

    // Make sure we received an ID in the URL
    if (!isset($_GET['id'])) {
        echo 'You try to access something forbidden !';
        die();
    }

    $id = (int) $_GET['id'];

    // Making sure the id is ok (integer)
    if ($id <= 0) {
        echo 'You try to access something forbidden !';
        die();
    }

    // Update only when form is submitted
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
            $query = "UPDATE toys
        SET name = '$name', price = $price, photo = '$photo', type = '$type', description = '$description' 
        WHERE id = $id";

            // 2. Execute the query
            $result = mysqli_query($conn, $query);

            // INSERT/UPDATE/DELETE returns true OR false
            if ($result)
                echo 'Successfully updated in the DB';
            else
                echo '<span style="color:red">Problem updating in the DB</span>';
        } else {
            foreach ($errors as $errorMsg) {
                echo "<span style='color:red'>$errorMsg</span>";
            }
        }
    }

    // Retrieve toy's info
    $conn = mysqli_connect('localhost', 'root', '', 'christmas_shop');
    $query = "SELECT * FROM toys WHERE id = $id";
    $results = mysqli_query($conn, $query);
    $toy = mysqli_fetch_assoc($results);

    // Make sure the toy exists
    if (mysqli_num_rows($results) == 0) {
        echo 'This toy doesnt exists !';
        die();
    }

    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Toy's name" value="<?= $toy['name']; ?>"><br>
        <input type="text" name="price" placeholder="Toy's price" value="<?= $toy['price']; ?>"><br>
        <select name="type" id="types">
            <option value="">--Please choose an option--</option>
            <option value="dolls" <?php if ($toy['type'] == 'dolls') {
                                        echo 'selected';
                                    } ?>>Dolls</option>
            <option value="mechanic" <?php if ($toy['type'] == 'mechanic') {
                                            echo 'selected';
                                        } ?>>Mechanic</option>
            <option value="puzzle" <?php if ($toy['type'] == 'puzzle') {
                                        echo 'selected';
                                    } ?>>Puzzle</option>
        </select><br>

        <input type="text" name="photo" placeholder="Photo URL" value="<?= $toy['photo']; ?>"><br>
        <textarea name="description" cols="30" rows="10" placeholder="Description"><?= $toy['description']; ?></textarea><br>
        <input type="submit" name="insertBtn" value="Insert toy">
    </form>
</body>

</html>