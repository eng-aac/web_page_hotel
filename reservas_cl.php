<?php
    require 'database.php';

    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];       
    $telefono = $_POST['telefono'];       
    $correo = $_POST['correo'];
    $promo = $_POST['promo'];

    if (!empty($_POST['dni']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['promo'])) {
        
        $consulta = "INSERT INTO reservas(dni, nombre, telefono, correo, promo) VALUES ('$dni','$nombre','$telefono','$correo','$promo')";
        
        $resultado = mysqli_query($conexion, $consulta) or die ("Hay algo mal en la consulta a la tabla elegida");
        
        echo '
        <script> alert("La reserva fue enviada correctamente. En breve nos comunicaremos con usted. Muchas gracias.");
        window.history.go(-1);
        </script>
        ';
        
        mysqli_close($conexion); 
    }else{
        echo '
        <script> alert("La reserva no pudo ser enviada. Por favor intente nuevamente más tarde. Muchas gracias.");
        window.history.go(-1);
        </script>
        '; 
    }
    
?>