<?php

include_once PATH . 'controladores/cotizacionControlador.php';
include_once PATH . 'controladores/UsuarioControlador.php';
include_once PATH . 'controladores/accesorioControlador.php';
include_once PATH . 'controladores/Usuario_sControlador.php';

class ControladorPrincipal {

    private $datos = array();

    public function __construct() {
        if (!empty($_POST) && isset($_POST["ruta"])) {
            $this->datos = $_POST;
        }
        if (!empty($_GET) && isset($_GET["ruta"])) {
            $this->datos = $_GET;
        }

        $this->control();
    }

    public function control() {

//        echo __CLASS__."  ".__FUNCTION__."<br/>";
//        echo "<pre>";
//        print_r($_REQUEST);
//        echo "</pre>";

        switch ($this->datos['ruta']) {

            case "listarcotizacion":
                $this->listarcotizacion();
                break;

            case "listarUsuario":
                $this->listarUsuario();
                break;

            case "listaraccesorio":
                $this->listaraccesorio();
                break;

            case "gestionDeRegistro":
                $this->gestionDeRegistro();
                break;

            case "gestionDeAcceso":
                $this->gestionDeAcceso();
                break;

            case "cerrarSesion":
                $this->cerrarSesion();
                break;             
        }
    }

    public function listarcotizacion() {
        $cotizacionControlador = new cotizacionControlador($this->datos);
    }

    public function actualizarcotizacion() {
        
    }

    public function cancelarActualizarcotizacion() {
        
    }

    public function mostrarInsertarcotizacion() {
        
    }

    public function insertarcotizacion() {
        
    }


    public function listarUsuario() {
        $UsuarioControlador = new UsuarioControlador($this->datos);
    }

    public function actualizarUsuario() {
        
    }

    public function cancelarActualizarUsuario() {
        
    }

    public function mostrarInsertarUsuario() {
        
    }

    public function insertarUsuario() {
        
    }

    public function listaraccesorio() {
        $accesorioControlador = new accesorioControlador($this->datos);
    }

    public function actualizaraccesorio() {
        
    }

    public function cancelarActualizaraccesorio() {
        
    }

    public function mostrarInsertaraccesorio() {
        
    }

    public function insertaraccesorio() {
        
    }

    public function gestionDeRegistro() {
        $usuario_sControlador = new Usuario_sControlador($this->datos);
    }
    public function gestionDeAcceso() {
        $usuario_sControlador = new Usuario_sControlador($this->datos);
    }
    public function cerrarSesion() {
        $usuario_sControlador = new Usuario_sControlador($this->datos);
    }

}
