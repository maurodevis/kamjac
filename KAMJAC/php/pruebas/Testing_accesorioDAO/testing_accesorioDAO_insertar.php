<?php


include_once '../../modelos/ConstantesConexion.php';
include_once PATH.'modelos/ConBdMysql.php';
include_once PATH.'modelos/modeloaccesorio/accesorioDAO.php';

$registro['Id_accesorio'] = 1;
$registro['Nombre'] = "bases_metalicas";
$registro['Precio'] = "35000";
$registro['Tipos_de_accesorio'] = "brazos";



$accesorio=new accesorioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);

$accesorioInsertado=$accesorio->insertar($registro);


echo "<pre>";
print_r($accesorioInsertado);
echo "</pre>";