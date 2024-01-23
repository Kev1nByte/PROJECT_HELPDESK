<?php
    /* llamada a las clases necesarias */
    require_once("../config/conexion.php");
    require_once("../models/Email.php");
    $email = new Email();

    /* opciones del controlador */
    switch ($_GET["op"]) {
        /*  enviar ticket abierto con el ID */
        case "ticket_abierto":
            $email->ticket_abierto($_POST["tick_id"]);
            break;
    }
?>