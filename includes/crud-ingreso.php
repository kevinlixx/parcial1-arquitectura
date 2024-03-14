<?php 
    require_once "conexion.php";
    $conection = new conexion();
    $conection = $conection->conectar();
    class crudIngreso {
        public function consultarAdmin($datos){
            try {
                $correo = $datos['correo'];
                $contrasena = $datos['contrasena'];
                $conection = conexion::conectar();
                var_dump($conection);
                
                var_dump($datos ['contrasena']);
                $sql = "SELECT * FROM admin WHERE correo = ? and contrasena = ?";
                $sentencia = $conection->prepare($sql);
                $sentencia->bind_Param('ss',$datos['correo'], $datos['contrasena']);
                $sentencia->execute();
                $consultar = $sentencia->get_result();
                    if($fila = $consultar->fetch_assoc()){
                        $consulta = "SELECT * FROM admin WHERE correo= '$correo' AND contrasena= '$contrasena'";
                        $consult = mysqli_query($conection, $consulta ) or die ("Error al traer los datos");
                        if($busqueda= mysqli_fetch_array($consult)){
                            return iterator_to_array($consult);
                        }
                    }else{
                        echo "<script>alert('Usuario o contraseña incorrecto intente nuevamente')</script>";
                        echo "<script>location.href='index.php'</script>";
                    }
            } catch (Exception $e) {
                die("Error al consultar el administrador: " . $e->getMessage());
            }
            
        }
        public function consultarEstudiante($datos){   
            try {
                $id = $datos['id'];
                $conection = conexion::conectar();
                $sql = "SELECT * FROM estudiante WHERE id = ?";
                $sentencia = $conection->prepare($sql);
                $sentencia->bind_Param('i',$datos['id']);
                $sentencia->execute();
                $consultar = $sentencia->get_result();
                if($fila = $consultar->fetch_assoc()){
                    $consulta = "SELECT * FROM estudiante WHERE id= '$id'";
                    $consult = mysqli_query($conection, $consulta ) or die ("Error al traer los datos");
                    if($busqueda= mysqli_fetch_array($consult)){
                        return iterator_to_array($consult);
                    }
                }else{
                    echo "<script>alert('El Id es incorrecto')</script>";
                    echo "<script>location.href='../ingVotar.php'</script>";
                }
            }    catch (Exception $e) {
                die("Error al consultar el estudiante: " . $e->getMessage());
            }

        }
    }
?>