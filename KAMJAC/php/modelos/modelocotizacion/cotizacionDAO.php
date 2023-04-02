<?php

include_once 'modelos/ConBdMysql.php';

class cotizacionDAO extends ConBdMySql {

    public function __construct($servidor, $base, $loginBD, $passwordBD) {

        parent::__construct($servidor, $base, $loginBD, $passwordBD);
    }

    public function seleccionarTodos() {
        $planConsulta = "SELECT c.Id_cotizacion,c.Fecha_Cotizacion,c.Id_Usuario,c.Total_Cotización,c.Estado";
        $planConsulta .= " FROM cotizacion c ";
        $planConsulta .= " ORDER BY c.Id_Cotizacion ASC ";


        $registroscotizacion = $this->conexion->prepare($planConsulta);
        $registroscotizacion->execute(); //Ejecución de la consulta

        $listadoRegistroscotizacion = array();
        
        while ($registro = $registroscotizacion->fetch(PDO::FETCH_OBJ)) {

            $listadoRegistroscotizacion[] = $registro;
        }
        $this->cierreBd();
        
        return $listadoRegistroscotizacion;        
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

