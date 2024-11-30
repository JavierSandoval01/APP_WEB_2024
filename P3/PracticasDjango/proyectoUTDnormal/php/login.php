<?php
session_start();
include('conexion.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST['username']);
    $contrasena = validate($_POST['password']);
    
    if (empty($usuario)) {
        header("Location: ../users/login.php?error=El usuario es requerido");
        exit();
    } elseif (empty($contrasena)) {
        header("Location: ../users/login.php?error=La contraseña es requerida");
        exit();
    } else {
        // Usar consulta preparada para evitar inyecciones SQL
        $sql = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $usuario);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Verificar contraseña usando password_verify()
            if (password_verify($contrasena, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['privilegio'] = $row['privilegio'];
                
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['email'] = $row['email'];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../users/login.php?error=El usuario o la contraseña son incorrectos");
                exit();
            }
        } else {
            header("Location: ../users/login.php?error=El usuario o la contraseña son incorrectos");
            exit();
        }
    }
} else {
    header("Location: ../users/login.php");
    exit();
}
