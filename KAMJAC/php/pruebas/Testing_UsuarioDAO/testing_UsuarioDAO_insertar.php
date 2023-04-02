<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloUsuario/UsuarioDAO.php';

$registro['Id_usuario'] = 1;
$registro['nombre'] = "anyi";
$registro['apellido'] = "mera";
$registro['Num_doc'] = "1023030042";
$registro['Fecha de nacimiento'] = "02/05/2023";
$registro['Email'] = "example@hotmail.com";
$registro['Direccion'] = "kr 7 a este 100 B";
$registro['telefono'] = "3142882439";


$usuario=new UsuarioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$usuarioInsertado=$usuario->insertar($registro);


echo "<pre>";
print_r($usuarioInsertado);
echo "</pre>";