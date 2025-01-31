
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" type="image/x-icon">
    <title>Entrar o registrarse</title>
</head>

<header>
    <div class="imgLogo">
        <a href="login.php"><img class="logo" src="https://1000marcas.net/wp-content/uploads/2019/12/Facebook-Logo-2019.png" alt="Logo"></a>
    </div>

    <div class="sesionBox">

        <form action="service.php" method="post" class="formularioSesion">
            <div class="menuLogin">
                <div class="usuario">
                    <div class="recordar">
                        <input type="checkbox" name="remember" id="remember"> 
                        <label for="remember">Recuerdame</label>
                    </div>
                    <input type="text" name="usuario" id="usuario" placeholder="Email o Usuario">
                </div>
                <div class="passwd">
                    <a href="">¿Has olvidado tu contraseña?</a>
                    <input type="password" name="pass" id="pass" placeholder="·······">
                </div>
                <div class="logear">
                    <button type="submit">Login</but>
                </div>
            </div> 
            </form>

            <div class="error">
                <p><?= @$mensaje = $_GET['mensaje']; ?></p>
            </div>

    </div>


</header>

<main>
    <div class="mapa">
        <p class="parrafoMain">Facebook te ayuda a conectar y compartir con las personas que forman parte de tu vida</p>
        <img src="https://i.postimg.cc/Wb7QX00n/OBa-Vg52wt-TZ.png" alt="mapa">
    </div>

    <div class="registrarse">
        <h3>Registrate</h3>
        <h4>Es gratis y para todo el mundo</h4>
        
        <form action="registration_control.php" class="formularioRegistro" method="POST">
            <div>
                <label for="rnombre" class="lregistro">Nombre:</label>
                <input type="text" name="rnombre" id="rnombre">
            </div>
            <div>
                <label for="rapellidos" class="lregistro">Apellidos:</label>
                <input type="text" name="rapellidos" id="rapellidos">
            </div>
            <div>
                <label for="remail" class="lregistro">Correo:</label>
                <input type="email" name="remail" id="remail">
            </div>
            <div>
                <label for="rpass" class="lregistro">Nueva Contraseña:</label>
                <input type="password" name="rpass" id="rpass">
            </div>
            <div>
                <label for="rbirthday" class="lregistro">Cumpleaños:</label>
                <input type="date" name="rbirthday" id="rbirthday">
            </div>
            <div class="seleccion">
                <label for="rsexo" class="lregistro">Soy:</label>
                <select name="rsexo" id="rsexo">
                    <option value="Sexo" disabled selected>Selecciona tu sexo:</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Hombre">Hombre</option>
                </select>
            </div>
            <div>
                <label for="rsexo" hidden></label>
                <button class="botonregistro" type="submit">Registrarse</button>
            </div>
        </form>
        <hr>
        <p class="crearweb"><a href="" class="web">Crear una página</a> para una celebridad, banda de música o negocio</p>
    </div>

</main>

<footer>

    <div class="idiomas">
        <a href="">English (US)</a>
        <a href="">Español </a>
        <a href="">Français (France)</a>
        <a href="">Português (Brasil)</a>
    </div>
    <hr>
    <div class="abajo">
        <div>
            <a href="https://github.com/IvanitoVS" target="_blank" class="autor">
                Iván Villena Sánchez 👍
            </a>
        </div>
        <div class="about">
            <a href="">Acerca de</a>
            <a href="">Condiciones</a>
            <a href="">Privacidad</a>
        </div>
    </div>

</footer>