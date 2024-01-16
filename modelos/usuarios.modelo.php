<?php

require_once "conexion.php";

class ModeloUsuarios
{

    /*  
        * MOSTRAR USUARIOS
    */
    static public function MdlMostrarUsuarios($tabla, $item, $valor)
    {

        // Instanciamos la clase Conexion
        $conexion = new Conexion();

        $stmt = $conexion->conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        // $stmt -> close();

        $stmt = null;
    }
}
