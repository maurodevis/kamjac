<?php

include_once PATH . 'modelos/modelocotizacion/cotizacionDAO.php';

class cotizacionControlador {

    private $datos;

    public function __construct($datos) {

        $this->datos = $datos;
        $this->cotizacionControlador();
    }

    public function cotizacionControlador() {

        switch ($this->datos['ruta']) {
            case "listarcotizacion": //provisionalmente para trabajar con datatables
                $this->listarcotizacion();
                break;
        }
    }

    public function listarcotizacion() {


        $gestarcotizacion = new cotizacionDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);
        $registrocotizacion = $gestarcotizacion->seleccionarTodos();

        session_start();

        //SE SUBEN A SESION LOS DATOS NECESARIOS PARA QUE LA VISTA LOS IMPRIMA O UTILICE//
        $_SESSION['listaDecotizacion'] = $registrocotizacion;     

        header("location:principal.php?contenido=vistas/vistascotizacion/listarDTRegistroscotizacion.php");
    }

    public function actualizarcotizacion() {
        
    }

    public function confirmaActualizarcotizacion() {
        
    }

    public function cancelarActualizarcotizacion() {
        
    }

    public function mostrarInsertarcotizacion() {
        
    }

    public function insertarcotizacion() {
        
    }

}
