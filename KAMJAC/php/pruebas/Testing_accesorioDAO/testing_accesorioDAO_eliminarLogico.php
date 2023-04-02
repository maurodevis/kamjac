<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloaccesorio/accesorioDAO.php';

$Id_accesorio=array(258);

$accesorio=new accesorioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);


$accesorioElimandoLogico=$accesorio->eliminarLogico($Id_accesorio);

echo "<pre>";
print_r($accesorioElimandoLogico);
echo "</pre>";