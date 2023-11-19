<?php
    $myObj = new stdClass();
    $myObj->status = 1;
    $myObj->message = "Gracias por contactar con nosotros, nos comunicaremos lo mas pronto posible";
    $myJSON = json_encode($myObj);
    echo $myJSON;
?>