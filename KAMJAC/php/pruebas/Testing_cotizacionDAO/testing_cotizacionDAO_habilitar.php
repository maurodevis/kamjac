<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modelocotizacion/cotizacionDAO.php';

$Id_Cotizacion=array(258);

$cotizacion=new cotizacionDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);


$cotizacionHabilitado=$cotizacion->habilitar($Id_Cotizacion);

echo "<pre>";
print_r($cotizacionHabilitado);
echo "</pre>";