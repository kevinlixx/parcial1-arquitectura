<?php
$user = "root";
$pass = "";
$host = "localhost";
$bd = "gapvotacion";
// Crear conexión
$conection = mysqli_connect($host, $user, $pass, $bd);

//Comprobación de la conexión

if (mysqli_connect_errno()) {
    die("Error al conectar con la base de datos");
}else{
    echo "Conexión exitosa";
}
class conexion
{
    public static function conectar(){
        $user = "root";
        $pass = "";
        $host = "localhost";
        $bd = "gapvotacion";
        // Crear conexión
        $conection = mysqli_connect($host, $user, $pass, $bd);
        return $conection; 
    }
}
?>
