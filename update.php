<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';

$id=$_GET['id'];
$name = $_GET['name'];
$quantity = $_GET['quantity'];
$description = $_GET['description'];

$query=mysqli_query($con,"UPDATE `medecine` SET `productname`='$name',`quantity`='$quantity',`description`='$description' WHERE `id`='$id'");


if($query){
    echo 1;
} else {
    echo 0;
}
?>