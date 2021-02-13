<?php 
require_once("config/db.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = "DELETE FROM newsletter_tbl WHERE id='$id'";
    $query = mysqli_query($conn, $stmt);
    if($query){
        header("location: users.php?msg=Successfully deleted user");
        die;
    }else{
        header("location: users.php?err=Something went wrong, cannot delete user");
        die;
    }
}else{
    header("location: index.php");
    die;
}

?>