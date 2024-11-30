<?php
// Seguridad
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    login|Django Proyecto UTD
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
      <li><a href="../index.php">Inicio</a></li>
      
      <?php
            
            if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
                ?>
                
                <li><a href="registrarse.php">Registrarse</a></li>
                <li><a href="login.php">Iniciar sesión</a></li>
                <?php
            } else {
                
                ?>
                <li><a href="../html/mision.php">Misión</a></li>
                <li><a href="../html/vision.php">Visión</a></li>
                
               
                
                <li><a href="../html/acercade.php">Acerca de</a></li>
                
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
      <h1>.:: ¡Iniciar sesión! ::.</h1>
      <hr>

      <?php
               if (isset($_GET['error'])) {
                   ?>
                   <div class="alert alert-warning" >
                <p>No es posible iniciar sesión, por favor ingrese sus credenciales de acceso<p>
            </div>
                   <?php
               }
               ?>
      
      
      <form action="../php/login.php" method="POST">

        <label for="username">Nombre de usuario: </label>
        <input type="text" name="username" />

        <label for="password">Contrasena: </label>
        <input type="password" name="password" />

        <input type="submit" value="login" />
      </form>
    </div>


  </section>
  <footer>
  <p>PHP con Javier &copy; 2024 </p>
  </footer>
</body>

</html>