<?php
    include "../includes/conexion.php";
    include "../includes/crud-ingreso.php";

    $crud = new crudIngreso();

    $datos = array(
        'correo' => $_POST['correo'],
        'contrasena' => $_POST['contrasena']
    );

    $resultado = $crud->consultarAdmin($datos);

    if (count($resultado) > 0){
        echo '<script>window.location.href="../admin.php"; alert("Se ha iniciado sesión exitosamente");</script>';
    } else {
        echo '<script>window.location.href="../index.php"; alert("Contraseña o correo incorrecto, intenta nuevamente");</script>';
    }

?>