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
        categorias|Django Proyecto UTD
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
                <li><a href="../html/mision.php">Misión</a></li>
                <li><a href="../html/vision.php">Visión</a></li> 
                <li><a href="../html/acercade.php">Acerca de</a></li>
                
                <li><a href="listado_art.php">Articulos</a></li>
                <li><a href="listado_cat.php">Categorías</a></li>
                
                
                <li><a href="../php/logout.php">Cerrar sesión</a></li>
                <?php
            }
            ?>
            
        </ul>
    </nav>
    <section id="content">
       <div class="box">
            <h1 class="title">Categorias</h1>
            <hr>
            <h1 style="text-align: center;">Listado</h1> <hr>
            <?php include '../php/consulta_cat.php'; ?>
            
            
            
            <?php foreach ($categorias as $categoria): ?>
    <article class="article-item">
        <div class="data">
        
            <h2><?php echo $categoria['nombre']; ?></h2>
            <p>Descripcion: <?php echo $categoria['descripcion']; ?></p>
            <span class="date"><?php echo $categoria['first_name'] . ' ' . $categoria['last_name']; ?></span>
            <span class="date"><?php echo $categoria['creado_el']; ?></span>
            
            <hr>
            <div class="clearfix"></div>
        </div>
    </article>
<?php endforeach; ?>

    

 
    </section>
    <footer>
    <p>PHP con Javier &copy; 2024 </p>
    </footer>
</body>
</html>