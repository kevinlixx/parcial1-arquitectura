<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAP votación</title>
    
    <script src="https://kit.fontawesome.com/79e6024c63.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tablet.css" media="screen and (min-width: 600px)" />
    <link rel="stylesheet" href="./css/desktop.css" media="screen and (min-width: 800px)" />

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
            <!-- <figure id="btn_menu">
                <img src="./img/menu.svg" alt="menu" />
                <figcaption></figcaption>
            </figure>
            <div id="back_menu"></div>
            <nav id="nav" class="menu-section">
                <img src="img/logo_header.svg" alt="">
            </nav> -->
        </div>
        </a>
</header>  
   <main>
        <div class="container-join">
            <div class="join--border">
                 <figure>
                    <img src="https://i.postimg.cc/14Ggx7Rb/logo-GAP.png" alt="logo" class="logo">
                </figure>
                <h2 class="title-colored">Iniciar sesión</h2>
                <form action="./procesos/ingreso_admin.php" method="post"class="form--inicio">
                    <input type="email" name="correo" placeholder="correo electronico" id="" class="input--inicio">
                    <input type="password" name="contrasena" placeholder="contraseña" id="" class="input--inicio">
                    <a href=""><input type="submit" value="iniciar sesión" class="input--button"></a>
                </form>
            </div>
        </div>
       <!--  login-admin -->
       <!-- - votar
       - resultados  -->
   </main>
   <footer class="pie-pagina">
    <div class="footer_copy">
        <small>&copy; 2024 <b>GAPVotación</b> - Todos los Derechos Reservados - Kevin Lis, David Yazo, Juan Montaño</small>
    </div>
    </footer>
<script src="js/script.js"></script>
</body>
</html>