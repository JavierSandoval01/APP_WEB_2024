<?php
// Seguridad
session_start();

$sesion= $_SESSION['username'];
if ($sesion== null || $sesion==''){
  header("Location: ../index.php");
  die();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mision|Django Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php" >Inicio</a></li>
            
            <?php
            
            if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
                ?>
                <li><a href="../users/registrarse.php">Registrarse</a></li>
                <li><a href="../users/login.php">Iniciar sesión</a></li>
                <?php
            } else {
                
                ?>
                <li><a href="mision.php">Misión</a></li>
                <li><a href="vision.php">Visión</a></li>
                <li><a href="acercade.php">Acerca de</a></li>
                
                <li><a href="../articulos/listado_art.php">Articulos</a></li>
                <li><a href="../articulos/listado_cat.php">Categorías</a></li>
                
                
                <li><a href="../php/logout.php">Cerrar sesión</a></li>
                <?php
            }
            ?>
            
        </ul>
    </nav>
    <section id="content">
       <div class="box">
            <h1>Mision</h1>
            <hr>
            <p>Formar profesionales altamente capacitados en tecnología e innovación, comprometidos con el desarrollo económico, social y ambiental de la región y el país. Impulsamos una educación de calidad, práctica y orientada al trabajo, fomentando valores de responsabilidad, integridad y respeto, para que nuestros egresados sean agentes de cambio y contribuyan activamente al bienestar de la sociedad.</p>
       </div>
    </section>
    <footer>
    <p>PHP con Javier &copy; 2024 </p>
    </footer>
</body>
</html>