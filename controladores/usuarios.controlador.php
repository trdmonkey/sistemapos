<?php

class ControladorUsuarios {

     /*  
        * INGRESO USUARIO
     */
    static public function ctrIngresoUsuario() {

        if(isset($_POST["ingUsuario"])) {

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingUsuario']) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingPassword'])) {

                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST['ingUsuario'];

                 // Instanciamos la clase ModeloUsuarios
                 $modeloUsuarios = new ModeloUsuarios();

                 // Llamamos al método MdlMostrarUsuarios()
                 $respuesta = $modeloUsuarios->MdlMostrarUsuarios($tabla, $item, $valor);

                // var_dump($respuesta["usuario"]);
                if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]) {

                    // echo '<div class="alert alert-success">Bienvenido al sistema.</div>';
                    $_SESSION["iniciarSesion"] = "ok";

                    echo '<script>
                    window.location = "inicio";
                    </script>';

                } else {

                    echo '<div class="alert alert-danger">Algo salio mal! Vuelve a intentar.</div>';

                }

            }

        }

    }

    /*  
        * REGISTRO DE USUARIO : CREAR
    */
    static public function ctrCrearUsuario() {

        if(isset($_POST["nuevoUsuario"])) {

            // if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevoNombre']))

        }

    }

}
