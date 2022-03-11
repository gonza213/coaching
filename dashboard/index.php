<?php

require_once 'controllers/plantilla.controller.php';
require_once 'controllers/usuarios.controller.php';
require_once 'controllers/reservas.controller.php';


require_once 'models/usuarios.models.php';
require_once 'models/reservas.models.php';

require_once "extensions/vendor/autoload.php";

$plantilla = new Plantilla();
$plantilla -> ctrMostrarPlantilla();