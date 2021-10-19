<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
    require "Mail.php";

    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    try{
        $mail = new Mail(); 
        $mail->sendMail($email, "Contacto", $name, "Dear ".$name."\n We appreciate that you get in touch with us, we will get in touch with you as quickly as possible");
        $mail = null; 
        $mail = new Mail(); 
        $mail->sendMail("marcoangelgaleana@outlook.com", "Contacto", $name, "Telefono: ".$phone."\nCorreo: ".$email."\nMensaje: ".$message);
    }
    catch(Throwable $e){
        echo false;
    }
    echo true;
?>