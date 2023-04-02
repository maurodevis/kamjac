<?php

include_once PATH . 'modelos/modeloUsuario/UsuarioDAO.php';

class UsuarioControlador {

    private $datos;

    public function __construct($datos) {

        $this->datos = $datos;
        $this->usuarioControlador();
    }

    public function usuarioControlador() {

        switch ($this->datos['ruta']) {
            case "listarUsuario": //provisionalmente para trabajar con datatables
                $this->listarUsuario();
                break;
        }
    }

    public function listarUsuario() {


        $gestarUsuario = new UsuarioDAO(SERVIDOR, BASE, USUARIO_BD, CONTRASENIA_BD);
        $registroUsuario = $gestarUsuario->seleccionarTodos();

        session_start();

        //SE SUBEN A SESION LOS DATOS NECESARIOS PARA QUE LA VISTA LOS IMPRIMA O UTILICE//
        $_SESSION['listaDeUsuario'] = $registroUsuario;     

        header("location:principal.php?contenido=vistas/vistasUsuario/listarDTRegistrosUsuario.php");
    }

    public function actualizarUsuario() {
        
    }

    public function confirmaActualizarUsuario() {
        
    }

    public function cancelarActualizarUsuario() {
        
    }

    public function mostrarInsertarUsuario() {
        
    }

    public function insertarUsuario() {
        
    }

}
