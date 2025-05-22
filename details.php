<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';
$id=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM `medecine` WHERE `id`='$id'");

$details = array();

while($row=mysqli_fetch_array($query)){
    $details[] = array(
        'id' => $row['id'],
        'quantity' => $row['quantity'],
        'productname' => $row['productname'],
        'description' => $row['description']
    );
}
echo json_encode($details);
?>