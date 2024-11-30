<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "bd_proyectoutd";

// Crear la conexión una sola vez
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die(json_encode([])); // Devuelve un array vacío en caso de error de conexión
}
?>
