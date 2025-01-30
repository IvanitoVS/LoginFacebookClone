<?php

session_start();

$host = "localhost";
$usuario = "root";
$password = "";
$dbname = "FacebookClone";
$usuarios = [];

// Establecer conexión
try {
    $conexion = mysqli_connect($host, $usuario, $password, $dbname);
    $sql = "SELECT email,password FROM usuarios";
    $query = mysqli_query($conexion, $sql);
    // Forma Noemi
    while ( $fila = $query->fetch_assoc() ) {
        $usuarios[] = $fila;
    }

    // Forma Andrés
    //$usuarios = $query -> fetch_all(MYSQLI_ASSOC);

}catch (Exception $e){
    echo $e->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") { //  Verificamos que la sesión haya sido por el método POST

    $user = htmlspecialchars($_POST["usuario"]);
    $pass = htmlspecialchars($_POST["pass"]);

    for ($i = 0; $i<count($usuarios); $i++) {
        if ($user == $usuarios[$i]["email"] && $pass == $usuarios[$i]["password"] ) {
            $_SESSION['nombre'] = $usuario;
            header("Location: index.php");
            exit();
        }
    }


        $mensaje = "* Usuario o contraseña incorrecta";
        header("Location: login.php?mensaje=$mensaje");
        exit();
    



} else {
    header("Location: login.php");
    exit();
}


?>