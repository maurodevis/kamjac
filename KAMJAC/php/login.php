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
    </head>
    <body>
        <div class="bg-img" style="background-image: url('../img/fondo.jpg');">
			<div class="overlay"></div>
		</div>
        <header>
            <!-- Nav -->
            <nav class="primary-header">
                <div class="navbar container">
                    <a href="../index.html"><img class="logo" src="../img/Logo_dasaga_white.png"></a>
                    <div class="zero">
                        <ul class="menu">
                        </ul>
                    </div>
                    <!-- /Main navigation -->
                </div>
            </nav>
        </header>
        <form role="form" method="POST" action="Controlador.php" name="formLogin" class="login-form">
                <h2>INICIAR SESIÓN</h2>
                <div class="input">
                    <input id="InputCorreo" class="form-control" placeholder="Correo Electrónico" name="email" type="email" autofocus>
                </div>
                <div class="input">
                    <input id="InputPassword" class="form-control" placeholder="Password" name="password" type="password" value="">
                </div>
                <div class="input">
                    <input type="hidden" name="ruta" value="gestionDeAcceso">
                </div>
            <button type="submit" class="button" onclick="validar_logueo()" value="Ingresar">Iniciar Sesión</button>
            <div>¿Aún no se ha registrado?<br><a href="registro.php">De click aquí para registrarse.</a></div>
        </form>
        <!-- Footer -->
		<footer id="footer" class="sm-padding bg-dark">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<!-- footer logo -->
						<div class="footer-logo">
							<a href="index.php"><img src="../img/Imagotipo_dasaga_medium_wl-01.png" alt="logo"></a>
						</div>
						<!-- /footer logo -->
						<!-- footer copyright -->
						<div class="footer-copyright">
							<p>Copyright © 2019. All Rights Reserved DASAGA.</p>
						</div>
						<!-- /footer copyright -->
					</div>
				</div>
				<!-- /Row -->
			</div>
			<!-- /Container -->
		</footer>
		<!-- /Footer -->
    </body>
</html>

