<?php

include_once '../../modelos/ConstantesConexion.php';
include_once PATH . 'modelos/ConBdMysql.php';
include_once PATH . 'modelos/modeloaccesorio/accesorioDAO.php';

$registro[0]['Id_accesorio'] = 1;
$registro[0]['Nombre'] = "bases_metalicas";
$registro[0]['Precio'] = "35000";
$registro[0]['Tipos_de_accesorio'] = "brazos";
$accesorioActualizado = new accesorioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);
$resultadoActualizacion = $accesorioActualizado->actualizar($registro);

echo "<pre>";
print_r($resultadoActualizacion);
echo "</pre>";
