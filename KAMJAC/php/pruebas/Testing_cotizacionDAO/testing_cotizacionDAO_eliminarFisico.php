<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modelocotizacion/cotizacionDAO.php';

$Id_Cotizacion=array(129);

$cotizacion=new cotizacionDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$cotizacionEliminadoFisico=$cotizacion->eliminar($Id_Cotizacion);

echo "<pre>";
print_r($cotizacionEliminadoFisico);
echo "</pre>";