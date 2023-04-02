<?php

include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloaccesorio/accesorioDAO.php';


$accesorio=new accesorioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$listadoCompleto=$accesorio->seleccionarTodos();

echo "<pre>";
print_r($listadoCompleto);
echo "</pre>";




?>