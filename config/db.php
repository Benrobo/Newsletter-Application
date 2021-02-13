<?php 

$localhost = "localhost";
$root = "root";
$pwd = null;
$db = "newsletter";

// connect to db using mysqli_connect()

$conn = mysqli_connect($localhost,$root,$pwd,$db);

if($conn){
    // echo "Connected";
    // die;
}
else{
    echo "Not connected";
    die;
}

?>