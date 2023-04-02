<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloUsuario/UsuarioDAO.php';

$Id_usuario=array(258);

$usuario=new UsuarioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);


$usuarioHabilitado=$usuario->habilitar($Id_usuario);

echo "<pre>";
print_r($usuarioHabilitado);
echo "</pre>";