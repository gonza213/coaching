<?php

require_once '../controllers/reservas.controller.php';

require_once '../models/reservas.models.php';


class Ajax{

    public $fecha;

    public function ajaxObtenerReserva(){
        $item = "fecha";
        $valor = $this->fecha;
        $respuesta = ControllerReservas::ctrVerReserva($item, $valor);

        echo json_encode($respuesta);
    }
}

if (isset($_POST["fecha"])) {
    $c = new Ajax();
    $c->fecha = $_POST["fecha"];
    $c->ajaxObtenerReserva();
}
