<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["nombreUsuario"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contraseña"];
    $sql = "INSERT INTO datos (nombreUsuario, correo, contraseña) VALUES ('$nombreUsuario', '$correo', '$contraseña')";
    if (mysqli_query($conn, $sql)) {
        echo "Registro exitoso. ¡Gracias por registrarte!";
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>