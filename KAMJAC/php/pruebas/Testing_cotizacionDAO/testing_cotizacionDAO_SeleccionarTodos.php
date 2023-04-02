<?php

include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modelocotizacion/cotizacionDAO.php';


$cotizacion=new cotizacionDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$listadoCompleto=$cotizacion->seleccionarTodos();

echo "<pre>";
print_r($listadoCompleto);
echo "</pre>";

?>