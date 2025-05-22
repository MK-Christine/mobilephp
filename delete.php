<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';

$id=$_GET['id'];


$query=mysqli_query($con,"UPDATE `medecine` SET `quantity`='0' WHERE `id`='$id'");


if($query){
    echo 1;
} else {
    echo 0;
}
?>