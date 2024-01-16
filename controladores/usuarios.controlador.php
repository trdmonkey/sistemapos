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

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevoNombre']) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoUsuario']) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoPassword'])) {

                $tabla = "usuarios";
                $datos = array(
                    "nombre" => $_POST["nuevoNombre"],
                    "usuario" => $_POST["nuevoUsuario"],
                    "password" => $_POST["nuevoPassword"],
                    "perfil" => $_POST["nuevoPerfil"]
                );

                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
                if($respuesta == "ok") {
                
                    echo '<script>
                
                    swal.fire({

                        position: "top-center",
                        icon: "success",
                        title: "El usuario ha sido guardado correctamente!",
                        showConfirmButton: false,
                        timer: 1800

                    }).then((result) => {

                        if(result.value) {
                            window.location = "usuarios";
                        }

                    });
                    
                    </script>';

                }

            } else {

                echo '<script>
                
                swal.fire({

                    icon: "error",
                    type: "error",
                    title: "El usuario no puede estar vacio ni llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false

                }).then((result) => {

                    if(result.value) {
                        window.location = "usuarios";
                    }

                });
                
                </script>';

            }

        }

    }

}
