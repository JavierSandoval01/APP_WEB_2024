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
      <h1>.:: Registro de usuario! ::.</h1>
      <hr>
      
      <form id="registroForm" action="../php/registro.php" method="POST">
    <label for="username">Nombre de usuario </label>
    <input type="text" name="username" id="username" />

    <label for="email">Dirección de correo electrónico</label>
    <input type="email" name="email" id="email" />

    <label for="firstName">Nombre</label>
    <input type="text" name="first_name" id="firstName" />

    <label for="lastName">Apellidos</label>
    <input type="text" name="last_name" id="lastName" />

    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" />

    <label for="confirmPassword">Contraseña (confirmación)</label>
    <input type="password" name="confirmPassword" id="confirmPassword" />

    <input type="submit" value="Registrarse" />
</form>
    </div>


  </section>
  <footer>
    <p>PHP con Javier &copy; 2024 </p>
  </footer>
  
  <script src="../js/validacion.js"></script>
</body>

</html>