<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloaccesorio/accesorioDAO.php';

$Id_accesorio=array(129);

$accesorio=new accesorioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$accesorioEliminadoFisico=$accesorio->eliminar($Id_accesorio);

echo "<pre>";
print_r($accesorioEliminadoFisico);
echo "</pre>";
