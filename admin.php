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
            <figure id="btn_menu">
                <img src="./img/menu.svg" alt="menu" />
                <figcaption></figcaption>
            </figure>
            <div id="back_menu"></div>
            <nav id="nav" class="menu-section">
                <img src='https://i.postimg.cc/14Ggx7Rb/logo-GAP.png' border='0' alt='logo-GAP'/>
                <ul>
                    <li><a id = "selected" href="./index.php"> Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>
        </a>
</header>  
   <main>
        <a href="./ingVotar.php">
            <div class="container-caja" id="container">
                <div class="caja caja1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon icon-tabler icon-tabler-calendar-plus" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8f1e00"  fill="#8f1e00" stroke-linecap="round" stroke-linejoin="round"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M96 80c0-26.5 21.5-48 48-48H432c26.5 0 48 21.5 48 48V384H96V80zm313 47c-9.4-9.4-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L409 161c9.4-9.4 9.4-24.6 0-33.9zM0 336c0-26.5 21.5-48 48-48H64V416H512V288h16c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336z"/></svg>
                    <h4>Votación</h4>
                    <div class="animacion">
                    </div>
                </div>
        </a>
        <a href="./resultados.php">
            <div class="caja caja2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon-tabler icon-tabler-clock-search" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="#dd6236" stroke-linecap="round" stroke-linejoin="round"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 192c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm64-64c0-17.7 14.3-32 32-32s32 14.3 32 32V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V160zM320 288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32z"/></svg>
                <h4>Resultados</h4>
                <div class="animacion"></div>
                </div>
            </div>
        </a>
   </main>
   <footer class="pie-pagina">
    <div class="footer_copy">
        <small>&copy; 2024 <b>GAPVotación</b> - Todos los Derechos Reservados - Kevin Lis, David Yazo, Juan Montaño</small>
    </div>
    </footer>
<script src="js/script.js"></script>
</body>
</html>