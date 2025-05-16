
<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';

$sql=mysqli_query($con,"SELECT * FROM `medecine`");
$medecine = array();
while($row=mysqli_fetch_array($sql)){
    $medecine[] = array(
        'id' => $row['id'],
        'quantity' => $row['quantity'],
        'productname' => $row['productname'],
        'description' => $row['description']

    );
}

echo json_encode($medecine);

?>