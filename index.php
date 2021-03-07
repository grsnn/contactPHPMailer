<?php

    //clean
    function cleanDatas($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $error = '';
    $success = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = cleanDatas($_POST['name']);
        $subject = cleanDatas($_POST['subject']);
        $email = $_POST['email'];
        $text = cleanDatas($_POST['text']);

        if(empty($name) || empty($email) || empty($text)){
            $error .= 'Por favor complete todos los campos';
        }
        if(!empty($email)){
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error .= 'Por favor ingrese un Email valido.';
            }
        }
        if(!$error){
            require 'PHPMailer/PHPMailerAutoload.php';
            //iniciar php mailer
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            //puerto
            $mail->Port=587;
            $mail->SMTPAuth=true;
            //encriptado
            $mail->SMTPSecure='tls';
            //Correo encargado de enviar los mensajes
            $mail->Username='tucorreo@gmail.com';
            //Contraseña del correo que enviara los mensajes
            $mail->Password='tu contraseña de tu Gmail';

            //Datos de quien envio el correo
            $mail->setFrom($email,$name);
            //donde queremos que nos llegue los correos
            //correo personal, la de nuestra empresa, etc.
            $mail->addAddress('tucorreo@gmail.com');
            //responder al correo de nuestro cliente
            $mail->addReplyTo($email,$name);

            //CUERPO DEL CORREO
            $mail->isHTML(true);
            $mail->Subject=$subject;
            $mail->Body='<div style="padding: 20px; border-radius: 5px; background: #00C851">
                            <h4 style="color: #fff; margin: 0px;">NOMBRE: ' .$name.'<br>CORREO: '.$email.'</h4><br><br>
                            <h3 style="color: #fff; margin: 0px;">MENSAJE: '.$text.'</h3>
                        </div>';
            //validar si se envio con éxito el correo
            if(!$mail->send()){
                $error = 'Algo salio mal, inténtelo de nuevo :( ';
            }else{
                $success = 'Gracias por contactarme ' .$name. ' :)';
            }
        }
    }

    require 'views/index.view.php'
?>