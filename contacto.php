<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){     
       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $email2 = "cibeiramassimo@gmail.com"; //aca va el mail de la empresa
        $header = "From: $email" . "\r\n";
        $header.= "Reply-To: $email" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($email2,$name,$message,$header);
        header("Location: index.html");
    }
    
}
?>