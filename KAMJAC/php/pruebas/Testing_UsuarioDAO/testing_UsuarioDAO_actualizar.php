<?php

include_once '../../modelos/ConstantesConexion.php';
include_once PATH . 'modelos/ConBdMysql.php';
include_once PATH . 'modelos/modeloUsuario/UsuarioDAO.php';

$registro[0]['Id_usuario'] = 1;
$registro[0]['nombre'] = "anyi";
$registro[0]['apellido'] = "mera";
$registro[0]['Num_doc'] = "1023030042";
$registro[0]['Fecha de nacimiento'] = "02/05/2023";
$registro[0]['Email'] = "example@hotmail.com";
$registro[0]['Direccion'] = "kr 7 a este 100 B";
$registro[0]['telefono'] = "3142882439";
$usuarioActualizado = new UsuarioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);
$resultadoActualizacion = $usuarioActualizado->actualizar($registro);

echo "<pre>";
print_r($resultadoActualizacion);
echo "</pre>";
