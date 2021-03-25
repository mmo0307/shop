<?php
include "connect_db.php";

$result = mysqli_query($answer, "SELECT * FROM `product`");



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Goods</title>
</head>
<body>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Товары</th>
        <th scope="col">Кол-во</th>
        <th scope="col">Цена</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        while($food = mysqli_fetch_assoc($result)) {
            ?>
            <a href="information_product.php" methods="get">
            <td> <?php echo $food['name']; ?> </td>
            </a>
            <td><?php echo $food['quantity']; ?></td>
            <td><?php echo $food['price']; ?></td>
        <?php
            }
        ?>
    </tr>
    </tbody>
</table>


</body>
</html>