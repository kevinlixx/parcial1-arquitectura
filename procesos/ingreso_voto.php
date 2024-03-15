<?php
    include "../includes/conexion.php";
    include "../includes/crud-ingreso.php";

    $crud = new crudIngreso();
    $datos = array(
        'id_candidato' => $_POST['id_candidato'],
        'id_estudiante' => $_POST['id_estudiante'],
    );

    $resultado = $crud->ingresarVoto($datos);
    if ($resultado){
        echo '<script>window.location.href="../ingVotar.php"; alert("Voto ingresado correctamente");</script>';
    } else {
        echo '<script>window.location.href="../ingVotar.php"; alert("Error al ingresar el voto");</script>';
    }


    ?>