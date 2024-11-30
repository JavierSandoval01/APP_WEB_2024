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
    <title>Artículos | Proyecto PHP</title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen PHP" title="PHP">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            
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
                <li><a href="listado_art.php">Artículos</a></li>
                <li><a href="listado_cat.php">Categorías</a></li>
                <li><a href="../php/logout.php">Cerrar sesión</a></li>
                <?php
            }
            ?>
            
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1 class="title">Artículos</h1>
            <hr>
            <h1 style="text-align: center;">Listado de Artículos</h1> <hr>
            <?php include '../php/consulta_art.php'; ?>
            <?php foreach ($articulos as $articulo): ?>
                <article class="article-item">
                    <div class="data">
                    
                    <?php
            if ($articulo['visible']) {
                ?>
                <div><img src="../media/<?php echo $articulo['imagen']; ?>" alt="Imagen del artículo" class="image"></div>
                <?php
            } 
            ?>
                        <h2><?php echo $articulo['titulo']; ?></h2>
                        <p>Descripcion: <?php echo $articulo['contenido']; ?></p>
                        <p>Categorias: <?php echo $articulo['categorias']; ?></p>
                        
                        
                        
                       
                        
                        
                        
                        
                        <span class="date"><?php echo $articulo['first_name'] . ' ' . $articulo['last_name']; ?></span>
                        <span class="date"><?php echo $articulo['creado_el']; ?></span>
                        
                        
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <footer>
    <p>PHP con Javier &copy; 2024 </p>
    </footer>
</body>
</html>
