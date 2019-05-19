<?php

require_once '../../../config/loader.php';

use Module\Dato\Controller\DatoController;
use Module\Dato\Entity\TipoDato;

$nombre= filter_input(INPUT_POST, "nombre");

$objEntity=new TipoDato();
$objEntity->setNombre($nombre);

$objController = new DatoController;
 $objController->add($objEntity);
$result = $objController->getAll();




echo json_encode($result);







