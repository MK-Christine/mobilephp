<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';


$producctname = $_GET['pn'];
$description = $_GET['desc'];
$quantity = $_GET['q'];

$query= mysqli_query($con,"INSERT INTO `medecine`(`productname`, `quantity`, `description`) VALUES ('$producctname','$quantity','$description')");

 if($query){
    echo 1;
 }
 else{
    echo 0;
 }

?>