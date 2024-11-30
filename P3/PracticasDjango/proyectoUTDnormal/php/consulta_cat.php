<?php
include('conexion.php');

// Consulta para obtener las categorías, ordenadas por la fecha de creación de forma descendente
$sql = "SELECT Categoria.nombre, Categoria.descripcion, Categoria.creado_el, usuarios.first_name, usuarios.last_name
FROM Categoria
INNER JOIN usuarios ON Categoria.id_user = usuarios.id
ORDER BY Categoria.creado_el DESC"; // Ordenar por fecha de creación de forma descendente

$result = $conn->query($sql);

$categorias = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categorias[] = $row;
    }
}

?>
