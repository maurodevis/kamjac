<?php

include_once 'modelos/ConBdMysql.php';

class accesorioDAO extends ConBdMySql {

    public function __construct($servidor, $base, $loginBD, $passwordBD) {

        parent::__construct($servidor, $base, $loginBD, $passwordBD);
    }

    public function seleccionarTodos() {
        $planConsulta = "SELECT Id_accesorio,Nombre,Precio,Tipos_de_accesorio";
        $planConsulta .= " FROM accesorio ";
        $planConsulta .= " ORDER BY Id_accesorio ASC ";


        $registrosaccesorio = $this->conexion->prepare($planConsulta);
        $registrosaccesorio->execute(); //Ejecución de la consulta

        $listadoRegistrosaccesorio = array();
        
        while ($registro = $registrosaccesorio->fetch(PDO::FETCH_OBJ)) {

            $listadoRegistrosaccesorio[] = $registro;
        }
        $this->cierreBd();
        
        return $listadoRegistrosaccesorio;        
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

