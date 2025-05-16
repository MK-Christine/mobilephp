

<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';

@$Email = $_GET['em'];
@$password = $_GET['pass'];

$check = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$Email' AND `password`='$password' LIMIT 1;");

if(mysqli_num_rows($check) > 0){
    $row = mysqli_fetch_array($check);
    echo json_encode(array("status" => 1, "id" => $row['id'], "firstname" => $row['firstname'], "lastname" => $row['lastname']));
} else {
    echo json_encode(array("status" => 0));

}

?>