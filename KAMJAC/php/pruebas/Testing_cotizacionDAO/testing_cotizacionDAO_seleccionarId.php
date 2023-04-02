<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modelocotizacion/cotizacionDAO.php';

$Id_Cotizacion=array(5);


$cotizacion=new cotizacionDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$cotizacionSeleccionado=$cotizacion->seleccionarId($Id_Cotizacion);

echo "<pre>";
print_r($cotizacionSeleccionado);
echo "</pre>";