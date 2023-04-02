<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloUsuario/UsuarioDAO.php';

$Id_usuario=array(5);


$usuario=new UsuarioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$usuarioSeleccionado=$usuario->seleccionarId($Id_usuario);

echo "<pre>";
print_r($usuarioSeleccionado);
echo "</pre>";
