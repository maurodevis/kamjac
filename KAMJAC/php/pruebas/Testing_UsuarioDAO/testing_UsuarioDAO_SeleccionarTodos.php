<?php

include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloUsuario/UsuarioDAO.php';


$usuario=new UsuarioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$listadoCompleto=$Usuario->seleccionarTodos();

echo "<pre>";
print_r($listadoCompleto);
echo "</pre>";




?>