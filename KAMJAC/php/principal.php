<?php
session_start();

include_once 'modelos/ConstantesConexion.php';
include_once PATH . 'controladores/ManejoSesiones/BloqueDeSeguridad.php';

/**************************************************/
$seguridad = new BloqueDeSeguridad();
$seguridad->seguridad("login.php");
/**************************************************/
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    echo "<script languaje='javascript'>alert('$mensaje')</script>";
    unset($_SESSION['mensaje']);
}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mi cuenta | <?php if(isset($_SESSION['perNombre']) && isset($_SESSION['perApellido'])) echo $_SESSION['perNombre']." ".$_SESSION['perApellido'];  ?> </title>
        <link rel="stylesheet" href="../css/stylepag.css">
        <link rel="icon" href="img\favicon.png" type="image/x-icon">
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
        <link href="gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="bg-img" style="background-image: url('../img/fondo.jpg');">
            <div class="overlay"></div>
        </div> 
        <header>
        <nav>
        <div class="primary-header">
            <div class="navbar containerr">
                        <div>
                        <a href="principal.php">
                            <img class="logo" src="../img/logo_dasaga_white.png">
                        </a>
                        </div>
                                <ul class="menu">
                                    <li><a><i class="fa fa-book"></i> Gestión Cotizacion <span class="fa fa-chevron-down"></span></a>
                                        <ul class="menu">
                                            <li><a href="Controlador.php?ruta=listarcotizacion&pag=0" class="nav-link">Listar Cotizacion</a></li>
                                            <li><a href="Controlador.php?ruta=mostrarInsertarcotizacion" class="nav-link">Agregar Cotizacion</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Gestión Usuario <span class="fa fa-chevron-down"></span></a>
                                        <ul class="menu">
                                            <li><a href="Controlador.php?ruta=listarUsuario&pag=0" class="nav-link">Listar Usuario</a></li>
                                            <li><a href="Controlador.php?ruta=mostrarInsertarUsuario" class="nav-link">Agregar Usuario</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Gestión Accesorio <span class="fa fa-chevron-down"></span></a>
                                        <ul class="menu">
                                            <li><a href="Controlador.php?ruta=listaraccesorio&pag=0" class="nav-link">Listar Accesorio</a></li>
                                            <li><a href="Controlador.php?ruta=mostrarInsertaraccesorio" class="nav-link">Agregar Accesorio</a></li>
                                        </ul>
                                    </li>
                                    <a class="button"  href="Controlador.php?ruta=cerrarSesion"><i class="fa fa-sign-out pull-right"></i> Salir </a>
                                </ul>
                            </div>
                        </div>

                <!-- page content -->
                <div class="content">
                    <h2 class="conten">Bienvenido/a, <?php if(isset($_SESSION['perNombre']) && isset($_SESSION['perApellido'])) echo $_SESSION['perNombre']." ".$_SESSION['perApellido'];  ?></h2>
                        <?php
                            if (isset($_GET['contenido'])) {
                            include($_GET['contenido']);
                            }
                        ?>                        
                </div>

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
                <!-- /page content -->
        <!--**************************************** -->  
        <!--LAS siguientes lìneas se agregan con el propòsito de dar funcionalidad a un DataTable-->
        <!--**************************************** -->
        <script src="gentelella-master/vendors/jquery/dist/jquery.min.js"></script>        
<!--        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
                        $(document).ready(function () {
                            $('#example').DataTable({
                                pageLength: 5,
                                lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                            });
                        });
        </script>     
        <!--**************************************** -->
        <!--**************************************** --> 
        
        <!-- jQuery -->
<!--        <script src="gentelella-master/vendors/jquery/dist/jquery.min.js"></script>-->
        <!-- Bootstrap -->
        <script src="gentelella-master/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="gentelella-master/vendors/nprogress/nprogress.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="gentelella-master/build/js/custom.min.js"></script>
       
    </body>
</html>
