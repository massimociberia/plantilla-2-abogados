<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
        // $destinatario = $_POST["cibeiramassimo@gmail.com"];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $email2 = "cibeiramassimo@gmail.com"; //aca va el mail de la empresa
        $header = "From: $email" . "\r\n";
        $header.= "Reply-To: $email" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($email2,$name,$message,$header);
        if ($mail){
            echo "<h4>enviado</h4>";
        } else{
            echo"<h4>no su pudo enviar</h4>";
        }
    }
}
?>