<?php 
session_start();

if ($_SESSION['nombre'] == "andres"){
    $user = "Andrés";
    $letra = "A";
} else if ($_SESSION['nombre'] == "ivan") {
    $user = "Iván";
    $letra = "I";
    } else  {
        $user = "Juan";
        $letra = "J";
    }
?>


<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" type="image/x-icon">
    <title>Inicio</title>
</head>


<header>
    <div class="imgLogo">
        <img class="logo" src="https://1000marcas.net/wp-content/uploads/2019/12/Facebook-Logo-2019.png" alt="Logo">
    </div>
    <div class="sesion">
        <div class="parrafoSesion"> 

            <div> 
                <p  class='letra'><?=$letra ?></p> 
            </div> 

            <p class="nombre"><?= $user ?></p>  
        </div>
        <a href="logout.php" class="cerrarSesion">Cerrar Sesión</a>
    </div>

    <div class="error">
        <p><?= @$mensaje = $_GET['mensaje']; ?></p>
    </div>
</header>
</header>

<main>

 <div class="mapa">
        <h1>¡Bienvenido!</h1>
        <img src="https://i.postimg.cc/Wb7QX00n/OBa-Vg52wt-TZ.png" alt="mapa">
    </div>

</main>

<footer>

<div class="idiomas">
        <a>English (US)</a>
        <a>Español </a>
        <a>Français (France)</a>
        <a>Português (Brasil)</a>
    </div>
    <hr>
    <div class="abajo">
        <div>
            <a href="" class="autor">
                Iván Villena Sánchez 👍
            </a>
        </div>
        <div class="about">
            <a>Acerca de</a>
            <a>Condiciones</a>
            <a>Privacidad</a>
        </div>
    </div>

</footer>