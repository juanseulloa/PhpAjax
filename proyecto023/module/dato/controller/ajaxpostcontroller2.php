<?php

require_once '../../../config/loader.php';

use Module\Dato\Controller\DatoController;
use Module\Dato\Entity\TipoDato;

$codDato = filter_input(INPUT_POST, "codajax");

$data = new TipoDato();
$data->set_codDato($codDato);

$objController = new DatoController;

$objController->delete($data);

$result = $objController->getAll();

echo json_encode($result);








