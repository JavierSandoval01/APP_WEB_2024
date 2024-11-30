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
        Inicio | Django Proyecto UTD
    </title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            
            <?php
            // Verificar si existe la sesión antes de acceder a ella
            if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
                ?>
                <li><a href="users/registrarse.php">Registrarse</a></li>
                <li><a href="users/login.php">Iniciar sesión</a></li>
                <?php
            } else {
                // Si el usuario está logueado, muestra la opción de cerrar sesión
                ?>
                <li><a href="html/mision.php">Misión</a></li>
                <li><a href="html/vision.php">Visión</a></li>
                <li><a href="html/acercade.php">Acerca de</a></li>
                
                
                <li><a href="articulos/listado_art.php">Articulos</a></li>
                <li><a href="articulos/listado_cat.php">Categorías</a></li>
                
                
                <li><a href="php/logout.php">Cerrar sesión</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <section id="content">
    <?php
    
    if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
        
        if (!isset($_SESSION['bienvenida'])) {
            
            
            ?>
            
            <div class="alert alert-success">
                      <p>Bienvenid@, <?php echo htmlspecialchars($_SESSION['username']);?> </p>
                  </div>
                  <?php
            
            $_SESSION['bienvenida'] = true;
        }
    }
    ?>
       <div class="box">
       
       
       <?php
    
    if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
        ?>
        <p>Bienvenid@, <?php echo htmlspecialchars($_SESSION['first_name'] . ' ' . $_SESSION['last_name']); ?> </p>
        <p><?php echo htmlspecialchars($_SESSION['email']); ?> </p>
        <?php   
    }
    else{
        ?>
        <p>Por favor inicia sesion</p>
        <?php   
    }
    ?>
       
            <h1>Inicio</h1>
            <hr>
            <p>.:: ¡Bienvenido a mi página de Inicio! ::.</p>
       </div>
    </section>
    <footer>
        <p>PHP con Javier &copy; 2024 </p>
    </footer>
</body>
</html>
