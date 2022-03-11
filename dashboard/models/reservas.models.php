<?php

require_once "conexion.php";


class ModelReservas
{

    static public function mdlCrearReservas($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, cliente, cantidad, fecha, horario, numero_transaccion, total, ganancia, comision, operacion) VALUES (:nombre, :cliente, :cantidad, :fecha, :horario, :numero_transaccion, :total, :ganancia, :comision, :operacion)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":horario", $datos["horario"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_transaccion", $datos["numero_transaccion"], PDO::PARAM_STR);
        $stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
        $stmt->bindParam(":ganancia", $datos["ganancia"], PDO::PARAM_STR);
        $stmt->bindParam(":comision", $datos["comision"], PDO::PARAM_STR);
        $stmt->bindParam(":operacion", $datos["operacion"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }


        // MOSTRAR Admin
        static public function mdlVerReserva($tabla, $item, $valor)
        {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
    
            $stmt->execute();
    
            return $stmt->fetch();
    
            $stmt->close();
    
            $stmt = null;
        }

         // MOSTRAR Admin
         static public function mdlMostrarReservas($tabla)
         {
             $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
     
             $stmt->execute();
     
             return $stmt->fetchAll();
     
             $stmt->close();
     
             $stmt = null;
         }

  

}