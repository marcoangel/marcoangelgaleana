<?php
    $myObj = new stdClass();
    $myObj->status = 1;
    $myObj->message = $_POST["phone"];
    $myJSON = json_encode($myObj);
    echo $myJSON;
?>