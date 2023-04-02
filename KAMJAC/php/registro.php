<?php
session_start();
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    echo "<script languaje='javascript'>alert('$mensaje')</script>";
    unset($_SESSION['mensaje']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=devce-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="../css/form.css">
        <title>Dasaga® · Home</title>
        <link rel="icon" href="../img/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
        <!-- Funciones JavaScript propias del sistema -->
        <script type="text/javascript" src="../javascript/funciones.js"></script>
        <!-- Funciones JavaScript propias del sistema -->
        <script type="text/javascript" src="../javascript/md5.js"></script> 
   
    </head>
    <body>
    <div class="bg-img" style="background-image: url('../img/fondo.jpg');">
			<div class="overlay"></div>
		</div>
        <header>
            <!-- Nav -->
            <nav class="primary-header">
                <div class="navbar container">
                    <a href="index.html"><img class="logo" src="../img/Logo_dasaga_white.png"></a>
                    <div class="zero">
                        <ul class="menu">
                        </ul>
                    </div>
                    <!-- /Main navigation -->
                </div>
            </nav>
        </header>
        <div>
            <form method="POST" action="Controlador.php" id="formRegistro" class="login-form">
                <h2>Ingrese sus datos para registrarse.</h2>
                <div>
                    <input class="form-control" placeholder="Documento" name="documento" type="number" required="required" autofocus value="">
                </div>
                <div>
                    <input class="form-control" placeholder="Nombres" name="nombre" type="text"   required="required" value="">
                </div>
                <div>
                    <input class="form-control" placeholder="Apellidos" name="apellidos" type="text"  required="required" value="">
                </div>
                <div>
                    <input id="InputCorreo" class="form-control" placeholder="Correo Electrónico" name="email" type="email"  required="required" value="">
                </div>
                <div>
                    <input id="InputPassword" class="form-control" placeholder="Password" name="password" type="password" value=""  required="required">
                </div>
                <div>
                    <input id="InputPassword2" class="form-control" placeholder="Confirmar Password" name="password2" type="password" value="">
                </div>
                    <input type="hidden" name="ruta" value="gestionDeRegistro">
                    <button class="button" onclick="valida_registro();">Registrar</button>
                <div>
                    <div>Ya está registrado?<a href="login.php">Inisiar sesión</a></div>
                </div>
            </form>
        </div>
    </body>
</html>