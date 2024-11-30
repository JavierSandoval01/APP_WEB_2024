<?php
include('conexion.php');

// Consulta para obtener los artículos con los datos del usuario (nombre y apellido), ordenados por fecha de creación descendente
$sql = "SELECT 
            articulo.id AS articulo_id,
            articulo.titulo,
            articulo.contenido,
            articulo.imagen,
            articulo.visible,
            articulo.creado_el,
            usuarios.first_name,
            usuarios.last_name,
            GROUP_CONCAT(categoria.nombre ORDER BY categoria.nombre ASC) AS categorias
        FROM articulo
        INNER JOIN usuarios ON articulo.id_user = usuarios.id
        LEFT JOIN articulo_categoria ON articulo.id = articulo_categoria.articulo_id
        LEFT JOIN categoria ON articulo_categoria.categoria_id = categoria.id
        GROUP BY articulo.id
        ORDER BY articulo.creado_el DESC"; // Ordenar por fecha de creación de forma descendente

$result = $conn->query($sql);

$articulos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $articulos[] = $row;
    }
}

// Cerrar conexión
$conn->close();
?>
