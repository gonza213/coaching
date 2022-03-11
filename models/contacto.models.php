<?php

require_once "conexion.php";


class ModelContacto
{

    static public function mdlCrearContacto($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, asunto, mensaje) VALUES (:nombre, :email, :asunto, :mensaje)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":asunto", $datos["asunto"], PDO::PARAM_STR);
        $stmt->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

  

}