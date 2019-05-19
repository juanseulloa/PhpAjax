<?php

require_once '../../../config/loader.php';

use Module\Planeta\Controller\PlanetaController;
use Module\Planeta\Entity\Planeta;

$codplaneta = filter_input(INPUT_POST, "codajax");

$planeta = new Planeta();
$planeta->set_codplaneta($codplaneta);


$objController = new PlanetaController;
$result = $objController->getOne($planeta);


echo json_encode($result);







