<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloUsuario/UsuarioDAO.php';

$Id_usuario=array(129);

$usuario=new UsuarioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$usuarioEliminadoFisico=$usuario->eliminar($Id_usuario);

echo "<pre>";
print_r($usuarioEliminadoFisico);
echo "</pre>";
