<?php 
require_once("config/db.php");


if(isset($_POST['submit'])){
    
    $email = $_POST['emails'];
    $body = $_POST['body'];
    if(empty($email) || empty($body)){
        header("location: send.php?err=Fields cannot be empty");
        die;
    }else{
        $to = $email;
        $subject = "From Newsletter Web App";
        $txt = $body;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <newsletter@example.com>' . "\r\n";
        $headers .= 'Cc: newsletter@example.com' . "\r\n";

        $sendmail = mail($to,$subject,$txt,$headers);
        if($sendmail){
            header("location: send.php?msg=Successfully sent an email");
            die;
        }else{
            header("location: send.php?err=Something went wrong cannot send email");
            die;
        }
    }
    // mail(to, subject,headers,body);

    


}else{
    header("location: index.php");
    die;
}


?>