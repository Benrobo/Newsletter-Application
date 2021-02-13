<?php 
require_once("config/db.php");

if(isset($_POST['submit'])){
    // validate user inputs
    // insert into db

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "SELECT * FROM newsletter_tbl WHERE email='$email'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if(empty($username) || empty($email)){
        header("location: index.php?err=Fields cannot be empty");
        die;
    }
    else if($count > 0){
        header("location: index.php?err=Subscriber with that email already exist");
        die;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: index.php?err=Email given is invalid");
        die;
    }else{
        // insert those records into db
        $stmt = "INSERT INTO newsletter_tbl(username,email) VALUES('$username','$email')";

        $query = mysqli_query($conn, $stmt);
        if($query){
            header("location: index.php?msg=Thank you for subscribing to our newsletter");
            die;
        }else{
            header("location: index.php?err=Something went wrong, please try again later");
            die;
        }
    }
}else{
    header("location: index.php");
    die;
}



?>