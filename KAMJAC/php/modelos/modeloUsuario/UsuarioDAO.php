<?php

include_once 'modelos/ConBdMysql.php';

class UsuarioDAO extends ConBdMySql {

    public function __construct($servidor, $base, $loginBD, $passwordBD) {

        parent::__construct($servidor, $base, $loginBD, $passwordBD);
    }

    public function seleccionarTodos() {
        $planConsulta = "SELECT u.Id_usuario,u.nombre,u.apellido,u.Num_doc,u.Fecha_nacimiento,u.Email,u.Direccion,u.telefono";
        $planConsulta .= " FROM usuario u ";
        $planConsulta .= " ORDER BY u.Id_usuario ASC ";


        $registrosUsuario = $this->conexion->prepare($planConsulta);
        $registrosUsuario->execute(); //Ejecución de la consulta

        $listadoRegistrosUsuario = array();
        
        while ($registro = $registrosUsuario->fetch(PDO::FETCH_OBJ)) {

            $listadoRegistrosUsuario[] = $registro;
        }
        $this->cierreBd();
        
        return $listadoRegistrosUsuario;        
    }

//    public function seleccionarId($sId) {
//        
//    }
//
//    public function insertar($registro) {
//        
//    }
//
//    public function actualizar($registro) {
//        
//    }
//
//    public function eliminar($sId = array()) {
//        
//    }
//
//    public function eliminarLogico($sId = array()) {
//        
//    }

}
?>

