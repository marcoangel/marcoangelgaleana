<?php
    session_start();
    if(!isset($_SESSION["lang"])){
        $_SESSION['lang']="es";
    }
    if(isset($_GET["lang"]) && $_GET["lang"]==="en"){
        $_SESSION['lang'] = 'en';
    }
    elseif(isset($_GET["lang"]) && $_GET["lang"]==="es"){
        $_SESSION['lang'] = 'es';
    }
?>