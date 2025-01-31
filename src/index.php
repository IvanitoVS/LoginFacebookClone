<?php 
session_start();

$letra = substr($_SESSION['nombre'],0,1);
$letra = strtoupper($letra);
$_SESSION['nombre'] = $letra . substr($_SESSION['nombre'],1,);
?>


<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleLogin.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
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

            <p class="nombre"><?= $_SESSION['nombre']; ?></p>  
        </div>
        <a href="logout.php" class="cerrarSesion">Cerrar Sesión</a>
    </div>

</header>
</header>

<main>

    <div class="bienvenido">
        <h1>¡Bienvenido!</h1>
    </div>

    <form action="envioCorreo.php" method="POST">
        <fieldset>
            <legend><label for="tuemail">Tu email: <span class="obligatorio">*</span></label></legend>
            <input type="email" name="tuemail" id="tuemail" placeholder="example@example.com" required>
        </fieldset>
        <fieldset>
            <legend>Asunto: <span class="obligatorio">*</span></legend>
            <label for="asunto"></label>
            <input type="text" name="asunto" id="asunto" placeholder="Asunto..." required>
        </fieldset>
        <fieldset>
            <legend>Mensaje: <span class="obligatorio">*</span></legend>
            <label for="mensaje"></label>
            <textarea name="mensaje" id="mensaje" placeholder="Escribe un mensaje...." required></textarea>
        </fieldset>
        <div class="botonesCorreo">

        <button type="submit" class="bCorreo">Enviar</button>
        <button type="reset" class="bCorreo">Borrar</button>
        <p><?= @$mensaje = $_GET['mensaje']; ?></p>
        </div>

    </form>


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
            <a href="https://github.com/IvanitoVS" target="_blank" class="autor">
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