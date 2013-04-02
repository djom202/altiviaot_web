<?php
    require_once('../lib/phpmailer/class.phpmailer.php');

'nombre='+ $("#inputNombre").val() + '&asunto=' + $("#inputAsunto").val() + '&email=' + $("#inputEmail").val() + '&web=' + $("#inputWeb").val() + '&twitter=' + $("#inputTwitter").val() + '&ciudad=' + $("#inputCiudad").val() + '&descripcion=' + $("#inputDescripcion").val();

    if(isset($_REQUEST['nombre'])){ $nom=$_REQUEST['nombre']; }
    if(isset($_REQUEST['email'])){ $email=$_REQUEST['email']; }
    if(isset($_REQUEST['asunto'])){ $asunto=$_REQUEST['asunto']; }
    if(isset($_REQUEST['web'])){ $web=$_REQUEST['web']; }
    if(isset($_REQUEST['twitter'])){ $twitter=$_REQUEST['twitter']; }
    if(isset($_REQUEST['ciudad'])){ $ciudad=$_REQUEST['ciudad']; }
    if(isset($_REQUEST['descripcion'])){ $descripcion=$_REQUEST['descripcion']; }

    $body = '<table>'.
        '<tr><td><b>Apatarmentos Amoblados en Barranquilla</b></td></tr>'.
        '<tr><td><b>Nit: 22413641-4</b></td></tr>'.
        '<tr><td><b>Nombre: Audrey Rodr&iacute;guez</b></td></tr>'.
        '<tr><td><b>Cargo: Directora Log&iacute;stica y Comercial</b></td></tr>'.
        '<tr><td><b>Direcci&oacute;n: Cra 42h N&deg; 84 - 101 Piso 1</b></td></tr>'.
        '<tr><td>&nbsp;</td></tr>'.
        '<tr><td>Fecha de entreda:</td><td>'.$fin.'</td></tr>'.
        '<tr><td>Fecha de salida:</td><td>'.$fout.'</td></tr>'.
        '<tr><td>Nombre:</td><td>'.$nom.'</td></tr>'.
        '<tr><td>Tipo:</td><td>'.$usu.'</td></tr>';
        '<tr><td>Alcobas:</td><td>'.$alcobas.' d&iacute;as</td></tr>';
        if(isset($emp)){ $body .= '<tr><td>Empresa:</td><td>'.$emp.'</td></tr>'; }
        $body .= '<tr><td>Email:</td><td>'.$mail.'</td></tr>'.
        '<tr><td>Asunto:</td><td>'.$asunto.'</td></tr>'.
        '<tr><td>Mensaje:</td><td>'.$msj.'</td></tr>'.
        '<tr><td colspan="2">&nbsp;</td></tr>'.
        '</table>'; // Mensaje a enviar


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



    /*$mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = 587;
    $mail->Username = "tuemailgmail";
    $mail->Password = "tucontraseñagmail";
    $body = '
            <html>
                <head>
                    <style>p{font-family:Arial;font-size:12px}</style>
                </head>
                <body>$correo</body>
            </html>';
    $mail->SetFrom($_POST[email],$_POST[nombre]);
    $mail->AddAddress("tuemail", "tunombre");
    $mail->Subject = "Formulario de Contacto";
    $mail->MsgHTML($body);
    $mail->Send();*/
?>