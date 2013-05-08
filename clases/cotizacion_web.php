<?php
    if(isset($_REQUEST['nombre'])){ $nom=$_REQUEST['nombre']; }
    if(isset($_REQUEST['correo'])){ $correo=$_REQUEST['correo']; }
    if(isset($_REQUEST['tel'])){ $cell=$_REQUEST['tel']; }
    if(isset($_REQUEST['ciudad'])){ $ciudad=$_REQUEST['ciudad']; }
    if(isset($_REQUEST['comentarios'])){ $comentarios=$_REQUEST['comentarios']; }

    $body = '<table style="width: 19em;">
                <tr><td colspan="2"><b>AltiviaOT</b></td></tr>
                <tr><td colspan="2"><b>Nombre: Ing. Jonathan Olier</b></td></tr>
                <tr><td colspan="2"><b>Cargo: Director</b></td></tr>
                <tr><td colspan="2"><b>Cell: 301-444-2072</b></td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td>Nombre:</td><td>'.$nom.'</td></tr>
                <tr><td>Email:</td><td>'.$correo.'</td></tr>
                <tr><td>Cell:</td><td>'.$cell.'</td></tr>
                <tr><td>Ciudad:</td><td>'.$ciudad.'</td></tr>
                <tr><td>Comentarios:</td><td>'.$comentarios.'</td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><b>Nota:</b></td><td>Este correo ha sido enviado desde el sitio web de AltiviaOT.com</td></tr>
            </table>'; // Mensaje a enviar

    try{
        require("../lib/phpmailer/class.phpmailer.php"); //Importamos la funcion PHP class.phpmailer
        require("../lib/phpmailer/class.smtp.php"); //Importamos la funcion PHP class.phpmailer

        $mail = new PHPMailer();
        $mail->From = $mail; // Desde donde enviamos (Para mostrar)
        $mail->FromName = $nom; // Nombre de quien lo envia (Para mostrar)
        $mail->Subject = "Cotizacion Web"; // Este es el titulo del email.
        $mail->AddAddress("djom202@gmail.com","Ing. Jonathan Olier"); // Esta es la direccion a donde enviamos
        //$mail->AddAttachment("pdf/cotizacion.pdf", "cotizacion.pdf");
        $mail->Body=$body;
        $mail->IsHTML(true); // El correo se envia como HTML

        if(!$mail->Send()){ // Notificamos al usuario del estado del mensaje
           echo "No se pudo enviar el Mensaje como smtp. " . $mail->ErrorInfo;
        }else{
           echo "Mensaje enviado al fin!";
        }
    }catch(Exception $e){
        header('location: ../index.php');
    }
?>