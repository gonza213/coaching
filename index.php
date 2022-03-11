<?php

require_once 'controllers/plantilla.controller.php';
require_once 'controllers/usuarios.controller.php';
require_once 'controllers/contacto.controller.php';
require_once 'controllers/suscripciones.controller.php';


require_once 'models/usuarios.models.php';
require_once 'models/contacto.models.php';
require_once 'models/suscripciones.models.php';



$plantilla = new ControllerPlantilla();
$plantilla -> ctrMostrarPlantilla();