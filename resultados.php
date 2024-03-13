<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados</title>
    <script src="https://kit.fontawesome.com/79e6024c63.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./css/style-resultados.css">
    <link rel="stylesheet" href="./css/tablet-resultados.css" media="screen and (min-width: 600px)" />
    <link rel="stylesheet" href="./css/desktop-resultados.css" media="screen and (min-width: 800px)" />
</head>

<body>
    <!--  header - kevin   -->
    <header>
        <section class="section_header">
            <figure class="figure_header">
                <img src='https://i.postimg.cc/14Ggx7Rb/logo-GAP.png' border='0' alt='logo-GAP' />
                <figcaption></figcaption>
            </figure>
            <div class="menu menu-header">
                <figure id="btn_menu">
                    <img src="./img/menu.svg" alt="menu" />
                    <figcaption></figcaption>
                </figure>
                <div id="back_menu"></div>
                <nav id="nav" class="menu-section">
                    <img src='https://i.postimg.cc/14Ggx7Rb/logo-GAP.png' border='0' alt='logo-GAP' />
                    <ul>
                        <li><a href="#iniciar-sesion">Cerrar sesión</a></li>
                    </ul>
                </nav>
            </div>
            </a>
    </header>
    <!-- yazo -resultados -->
    <main>
        <section>
            <div class="container" style="padding:100px;">
                <div class="row">
                    <div class="col-sm-12" style="border:2px solid gray;">

                        <div class="page-header">
                            <h2 class="specialHead">Nivel de Votos</h2>
                            <p class="normalFont">Registro estadistico de la cantidad de votos por candidato</p>
                        </div>

                        <div class="col-sm-12">
                            <!-- Agrega este elemento canvas donde quieras que aparezca el gráfico -->
                            <canvas id="myChart" style="width: 50%; height: 50%;"></canvas>
                            <?php
                            $user = "root";
                            $pass = "";
                            $host = "localhost";
                            $bd = "gapvotacion";

                            // Conexión a la base de datos
                            $conn = mysqli_connect($host, $user, $pass, $bd);
                            if (!$conn) {
                                echo "Hubo un fallo en la conexión.";
                            } else {
                                // Consulta SQL para obtener los candidatos y el número de votos
                                $sql = "SELECT c.id, CONCAT(c.nombre, ' ', c.apellido) AS candidato, COUNT(v.id) AS votos FROM candidato c LEFT JOIN votacion v ON c.id = v.candidatoId GROUP BY c.id";

                                $result = mysqli_query($conn, $sql);

                                $candidatos = array();
                                $votos = array();

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $candidato = $row['candidato'];
                                        $votos_candidato = $row['votos'];

                                        array_push($candidatos, $candidato);
                                        array_push($votos, $votos_candidato);

                                        // La línea que imprime el nombre del candidato ha sido eliminada
                                    }
                                }

                                // Consulta SQL para obtener el número total de votos
                                $sql = "SELECT COUNT(*) AS total FROM votacion";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    $total = $row['total'];

                                    echo "<hr>";
                                    echo "<strong>Número total de Votos</strong><br>";
                                    echo "
  <div class='text-primary'>
    <h3 class='normalFont'>Votos : $total </h3>
  </div>
  ";
                                }
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        var candidatos = <?php echo json_encode($candidatos); ?>;
        var votos = <?php echo json_encode($votos); ?>;
    </script>
    <footer class="pie-pagina">
        <div class="footer_copy">
            <small>&copy; 2023 <b>GAPVotación</b> - Todos los Derechos Reservados - Kevin Lis, David Yazo, Juan Montaño</small>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/chart.js"></script>
</body>

</html>