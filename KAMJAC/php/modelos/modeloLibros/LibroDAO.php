<?php

include_once 'modelos/ConBdMysql.php';

class LibroDAO extends ConBdMySql {

    public function __construct($servidor, $base, $loginBD, $passwordBD) {

        parent::__construct($servidor, $base, $loginBD, $passwordBD);
    }

    public function seleccionarTodos() {
        $planConsulta = "SELECT l.isbn,l.titulo,l.autor,l.precio,cl.catLibId,cl.catLibNombre ";
        $planConsulta .= " FROM libros l ";
        $planConsulta .= " JOIN categorialibro cl ON l.categoriaLibro_catLibId=cl.catLibId ";
        $planConsulta .= " ORDER BY l.isbn ASC ";


        $registrosLibros = $this->conexion->prepare($planConsulta);
        $registrosLibros->execute(); //Ejecución de la consulta

        $listadoRegistrosLibros = array();
        
        while ($registro = $registrosLibros->fetch(PDO::FETCH_OBJ)) {

            $listadoRegistrosLibros[] = $registro;
        }
        $this->cierreBd();
        
        return $listadoRegistrosLibros;        
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

