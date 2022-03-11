<?php

require_once "conexion.php";


class ModelSuscripcion
{

    static public function mdlCrearSuscripción($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(email) VALUES (:email)");

        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

  

}