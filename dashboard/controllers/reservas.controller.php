<?php

class ControllerReservas
{


    // REGISTRAR ADMIN
    static public function ctrCrearReserva($datos)
    {

        $tabla = 'reservas';

        $respuesta = ModelReservas::mdlCrearReservas($tabla, $datos);


        return $respuesta;
    }

    static public function ctrVerReserva($item, $valor)
    {

        $tabla = "reservas";

        $resultado = ModelReservas::mdlVerReserva($tabla, $item, $valor);

        return $resultado;
    }

    static public function ctrMostrarReservas()
    {

        $tabla = "reservas";

        $resultado = ModelReservas::mdlMostrarReservas($tabla);

        return $resultado;
    }


}
