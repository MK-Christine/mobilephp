
<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';

$product = $_GET['pid'];
$qwantity = $_GET['q'];

$select = mysqli_query($con, "SELECT * FROM `medecine` WHERE `id`='$product' LIMIT 1");
$row = mysqli_fetch_array($select);

if (mysqli_num_rows($select) > 0) {
    $quantity = $row['quantity'];
    $new_quantity = $quantity - $qwantity;

    if ($new_quantity >= 0) {
        mysqli_query($con, "UPDATE `medecine` SET `quantity`='$new_quantity' WHERE `id`='$product'");

        mysqli_query($con, "INSERT INTO `sales` VALUES (null, $product,$qwantity, current_timestamp())");

        echo 1; // Success
    } else {
        echo 2; // Not enough quantity
    }
} else {
    echo 0; // Product not found

}


?>