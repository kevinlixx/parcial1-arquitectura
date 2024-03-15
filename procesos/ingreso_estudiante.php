<?php
    include "../includes/conexion.php";
    include "../includes/crud-ingreso.php";

    $crud = new crudIngreso();

    $datos = array(
        'id' => $_POST['id'],
    );

    $resultado = $crud->consultarEstudiante($datos);
    $id= $_POST['id'];

    if (count($resultado) > 0){
        // Si el estudiante ya ha votado
        if ($resultado[0]['voto'] == TRUE) {
            echo '<script>window.location.href="../ingVotar.php";alert("Ya has votado y no puedes votar de nuevo.");</script>';
        } else {
            echo '<script>window.location.href="../votacion.php?id_estudiante='.$id.'"; alert("El Id es correcto");</script>';
        }
    } else {
        echo '<script>window.location.href="../ingVotar.php"; alert("EL Id es incorrecto");</script>';
    }

?>