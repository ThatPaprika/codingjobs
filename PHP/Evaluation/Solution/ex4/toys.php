<?php
// Retrieve all toys
$conn = mysqli_connect('localhost', 'root', '', 'christmas_shop');
$query = "SELECT * FROM toys";
$results = mysqli_query($conn, $query);
$toys = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys List</title>
</head>

<body>

    <?php require_once 'nav.html'; ?>

    <h3>Toys list</h3>

    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Description</th>
            <th>Edit the toy</th>
        </tr>

        <?php foreach ($toys as $toy) : ?>
            <tr>
                <td><img src="<?= $toy['photo']; ?>" width="100px"></td>
                <td><?= strtoupper($toy['name']); ?></td>
                <td><?= $toy['price']; ?> €</td>
                <td><?= $toy['type']; ?></td>
                <td>
                    <?php
                    echo substr($toy['description'], 0, 30);
                    if (strlen($toy['description']) > 30)
                        echo '...';
                    ?>
                </td>
                <td><a href="edit-toys.php?id=<?= $toy['id']; ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>