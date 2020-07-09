<?php

    $nombre = $_POST["nombre"]; 
    $correo = $_POST["correo"]; 
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Teléfono: " . $telefono . "<br>Mensaje: " . $mensaje; 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'lib/PHPMailer-master/src/Exception.php';
    require 'lib/PHPMailer-master/src/PHPMailer.php';
    require 'lib/PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP(); 
        
        //Configuración directamente con Mercury de XAMPP//
                                                  
        /*$mail->Host     = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;                                
        $mail->Username   = '';                     
        $mail->Password   = 'clave';                              
        $mail->SMTPSecure = 'ssl';                               
        $mail->Port       = 587;*/
        
        //Recipients
        $mail->setFrom($correo, $nombre);
        $mail->addAddress('aldocastillo@iesmb.edu.ar','Gran Hotel Gaby');  
        $mail->addCC('aldo.castillo.13@gmail.com','Gran Hotel Gaby');
    
        // Content
        $mail->isHTML(true);                          
        $mail->Subject = 'Consulta';
        $mail->Body    = $body;
    
        $mail->CharSet = 'UTF-8';
        
        $mail->send();
        echo '
        <script> alert("La consulta fue enviada correctamente.");
        window.history.go(-1);
        </script>
        ';
    } catch (Exception $e) {
        echo "El mensaje no pudo ser enviado. Error: {$mail->ErrorInfo}";
        }

?>