<?php
include('conexion.php');
// Consulta para obtener las categorías


// Datos a insertar
$username = $_POST['username'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$password = $_POST['password']; // La contraseña en texto claro
$email = $_POST['email'];

$password_ha = password_hash($password, PASSWORD_DEFAULT);
// Insertar datos en la tabla
$sql = "INSERT INTO usuarios (username, last_name, first_name, password,email)
        VALUES ('$username', '$last_name', '$first_name', '$password_ha', '$email')";


// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    header("Location: ../users/login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
