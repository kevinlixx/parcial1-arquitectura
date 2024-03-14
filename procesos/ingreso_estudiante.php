<?php
    include "../includes/conexion.php";
    include "../includes/crud-ingreso.php";

    $crud = new crudIngreso();

    $datos = array(
        'id' => $_POST['id'],
    );

    $resultado = $crud->consultarEstudiante($datos);

    if (count($resultado) > 0){
        echo '<script>window.location.href="../votacion.php"; alert("El Id es correcto");</script>';
    } else {
        echo '<script>window.location.href="../ingvotar"; alert("EL Id es incorrecto");</script>';
    }

?>