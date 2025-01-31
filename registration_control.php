<?php

$host = "localhost";
$usuario = "root";
$password = "";
$dbname = "FacebookClone";

try {

    $conexion = mysqli_connect($host, $usuario, $password, $dbname);

}   catch (Exception $e) {

    $mensjae = $e->getMessage();
    echo $mensaje;
    exit();
}



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["rnombre"]) || empty($_POST["rapellidos"])  || empty($_POST["remail"]) || empty($_POST["rpass"]) || empty($_POST["rbirthday"]) || empty($_POST["rsexo"])) {

            $mensaje = "Error, registro incompleto, por favor introduzca todos los campos.";
            header("Location: login.php?mensaje=$mensaje");
            exit();

        } else {

            $rnombre = $_POST["rnombre"];
            $rapellidos = $_POST["rapellidos"];
            $remail = $_POST["remail"];
            $rpass = $_POST["rpass"];
            $rbirthday = $_POST["rbirthday"];
            $rsexo = $_POST["rsexo"];

            $sql  = mysqli_prepare($conexion, "INSERT INTO usuarios VALUES ('NULL','$rnombre', '$rapellidos', '$remail', '$rbirthday', '$rsexo', '$rpass')"); // Preparamos la consulta

            $sqlemails = mysqli_query($conexion,"SELECT email FROM usuarios;"); // Guardamos los emails
            while ( $fila = $sqlemails->fetch_assoc() ) {
                $totalEmails[] = $fila['email'];
            }

            for ($i = 0; $i < count($totalEmails); $i++) {  // Comprobamos si el email ya estaba registrado
                if ($remail == $totalEmails[$i]) {
                    $mensaje = "Error, el correo électronico ya esta registrado, intentalo con otro.";
                    $comprobacion = false;
                    header("Location: login.php?mensaje=$mensaje");
                    exit();
                } else {
                    $comprobacion = true;   
                }
            }

            if ($comprobacion) {

                mysqli_stmt_execute($sql);
                $mensaje = "Cuenta creada correctamente.";
                header("Location: login.php?$mensaje");
                exit();
            }

        }
    }
?>