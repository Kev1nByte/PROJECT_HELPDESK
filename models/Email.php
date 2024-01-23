<?php
/* librerias necesarias para que el proyecto pueda enviar emails */
require('class.phpmailer.php');
include("class.smtp.php");

/* llamada de las clases necesarias que se usaran en el envio del mail */
require_once("../config/conexion.php");
require_once("../Models/Ticket.php");

class Email extends PHPMailer{

    //variable que contiene el correo del destinatario
    protected $gCorreo = '';
    protected $gContrasena = '';
    //variable que contiene la contraseña del destinatario

    public function ticket_abierto($tick_id){
        
    }

    public function ticket_cerrado($tick_id){
        
    }

    public function ticket_asignado($tick_id){
        
    }

}

?>