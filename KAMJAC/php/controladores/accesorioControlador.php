<?php

include_once PATH . 'modelos/modeloaccesorio/accesorioDAO.php';

class accesorioControlador {

    private $datos;

    public function __construct($datos) {

        $this->datos = $datos;
        $this->accesorioControlador();
    }

    public function accesorioControlador() {

        switch ($this->datos['ruta']) {
            case "listaraccesorio": //provisionalmente para trabajar con datatables
                $this->listaraccesorio();
                break;
        }
    }

    public function listaraccesorio() {


        $gestaraccesorio = new accesorioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);
        $registroaccesorio = $gestaraccesorio->seleccionarTodos();

        session_start();

        //SE SUBEN A SESION LOS DATOS NECESARIOS PARA QUE LA VISTA LOS IMPRIMA O UTILICE//
        $_SESSION['listaDeaccesorio'] = $registroaccesorio;     

        header("location:principal.php?contenido=vistas/vistasaccesorio/listarDTRegistrosaccesorio.php");
    }

    public function actualizaraccesorio() {
        
    }

    public function confirmaActualizaraccesorio() {
        
    }

    public function cancelarActualizaraccesorio() {
        
    }

    public function mostrarInsertaraccesorio() {
        
    }

    public function insertaraccesorio() {
        
    }

}
