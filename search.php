<?php

header("Access-Control-Allow-Origin: *");   
include 'connection.php';


$search = $_GET['search'];

$sql=mysqli_query($con,"SELECT * FROM `medecine` WHERE `productname` LIKE '%$search%' OR `description` LIKE '%$search%'");

$medecine = array();

while($row=mysqli_fetch_array($sql)){
    if($row['quantity'] > 0){
        $medecine[] = array(
            'id' => $row['id'],
            'quantity' => $row['quantity'],
            'productname' => $row['productname'],
            'description' => $row['description']
        );
    }
}

echo json_encode($medecine);
?>