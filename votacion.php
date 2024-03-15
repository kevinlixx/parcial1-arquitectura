<?php 
$id_estudiante = $_GET['id_estudiante'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>votación</title>
    <script src="https://kit.fontawesome.com/79e6024c63.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style-votacion.css">
    <link rel="stylesheet" href="./css/tablet-votacion.css" media="screen and (min-width: 600px)" />
    <link rel="stylesheet" href="./css/desktop-votacion.css" media="screen and (min-width: 800px)" />
</head>
<body>
    <!--  header - kevin   -->
   <header>
    <section class="section_header">
        <figure class="figure_header">
            <img src='https://i.postimg.cc/14Ggx7Rb/logo-GAP.png' border='0' alt='logo-GAP'/>
            <figcaption></figcaption>
        </figure>
        <div class="menu menu-header">
            <figure id="btn_menu">
                <img src="./img/menu.svg" alt="menu" />
                <figcaption></figcaption>
            </figure>
            <div id="back_menu"></div>
            <!-- <nav id="nav" class="menu-section">
                <img src='https://i.postimg.cc/14Ggx7Rb/logo-GAP.png' border='0' alt='logo-GAP'/>
                <ul>
                    <li><a href="">Cerrar sesión</a></li>
                </ul>
            </nav> -->
        </div>
        </a>
</header>
    <!-- Monta- seleccionar candidato -->
    <!-- - NO PUEDE REPETIR VOTO CON EL MISMO ID -->
    <main>

        <h2 id="titulo">Elige tu opción</h2>
        <section id="candidato">
            <div class="candidato1">
                <div class="candidato-content">
                    <h3>Shinichi Izumi</h3>
                    <img src='https://i.postimg.cc/prqK7zCz/imagen-2024-03-14-122808308.png' border='0' alt='imagen-2024-03-14-122808308'/>
                    <form action="./procesos/ingreso_voto.php" method="POST">
                        <input type="hidden" name="id_candidato" value="1">
                        <?php
                        echo '<input type="hidden" name="id_estudiante" value="'.$id_estudiante.'">'
                        ?>
                        <input type="submit" value="votar" class= "input--voto">
                    </form>
                </div>
            </div>
            
            <div class="candidato1">
                <div class="candidato-content">
                    <h3>Rintaro Okabe</h3>
                    <img src='https://i.postimg.cc/9Fz9dZTP/imagen-2024-03-10-142557607.png' border='0' alt='imagen-2024-03-10-142557607'/>
                    <form action="./procesos/ingreso_voto.php" method="POST">
                        <input type="hidden" name="id_candidato" value="2">
                        <?php
                        echo '<input type="hidden" name="id_estudiante" value="'.$id_estudiante.'">'
                        ?>
                        <input type="submit" value="votar" class= "input--voto">
                    </form>

                </div>
            </div>
            
            <div class="candidato1">
                <div class="candidato-content">
                    <h3>Pain Nagato</h3>
                    <img src='https://i.postimg.cc/ZR78mcpR/imagen-2024-03-10-143416333.png' border='0' alt='imagen-2024-03-10-143416333'/>
                    <form action="./procesos/ingreso_voto.php" method="POST">
                        <input type="hidden" name="id_candidato" value="3">
                        <?php
                        echo '<input type="hidden" name="id_estudiante" value="'.$id_estudiante.'">'
                        ?>
                        <input type="submit" value="votar" class= "input--voto">
                    </form>
                </div>
            </div>
            
            <div class="candidato1">
                <div class="candidato-content">
                    <h3>Voto en Blanco</h3>
                    <img src='https://i.postimg.cc/L4L5LT4y/imagen-2024-03-13-093707904.png' border='0' alt='imagen-2024-03-13-093707904'/>

                    <form action="./procesos/ingreso_voto.php" method="POST">   
                        <input type="hidden" name="id_candidato" value="4">
                        <?php
                        echo '<input type="hidden" name="id_estudiante" value="'.$id_estudiante.'">'
                        ?>
                        <input type="submit" value="votar" class= "input--voto">
                    </form>
                </div>
            </div>
        </section>
    </main>
    
    

    <footer class="pie-pagina">
        <div class="footer_copy">
            <small>&copy; 2024 <b>GAPVotación</b> - Todos los Derechos Reservados - Kevin Lis, David Yazo, Juan Montaño</small>
        </div>

    </footer>
    <script>
        function vote(opcion) {
            // Lógica para registrar el voto
            alert("¡Has realizado tu voto de manera correcta!");
            //Muestra el overlay
            document.querySelector('.overlay').style.display = 'block';
            // Redirige a otra página después de 2 segundos (2000 milisegundos)
            setTimeout(function() {
                window.location.href = './ingVotar.php';
            }, 2000);
        }
    </script>
     <script src="js/script.js"></script>
</body>
</html>