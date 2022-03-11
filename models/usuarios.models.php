<?php

require_once "conexion.php";


class ModelUsuario
{

    // Crear Admin
    static public function mdlCrearUsuario($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(cliente, email, password, nombre, rol, foto) VALUES (:cliente, :email, :password, :nombre, :rol, :foto)");

        $stmt->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":rol", $datos["rol"], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

  

}