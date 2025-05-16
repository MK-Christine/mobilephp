 

<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';

@$Firstname = $_GET['fn'];
@$Lastname = $_GET['ln'];
@$Email = $_GET['em'];
@$newpassword = $_GET['npass'];

$send = mysqli_query($con,"INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL, '$Firstname', '$Lastname', '$Email', '$newpassword');");

if ($send) {
    echo 1;
} else {
    echo 0;
}

?>