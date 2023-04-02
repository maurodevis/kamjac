<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modelocotizacion/cotizacionDAO.php';

$registro[0]['Id_Cotizacion'] = 4;
$registro[0]['Fecha_Cotizacion'] = "2020-10-16";
$registro[0]['Id_Usuario'] = "98351";
$registro[0]['Total_Cotizacion'] = "1000000";
$registro[0]['Estado'] = "En proceso";


$cotizacion=new cotizacionDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$cotizacionInsertado=$cotizacion->insertar($registro);


echo "<pre>";
print_r($cotizacionInsertado);
echo "</pre>";