<?php

require_once '../../../config/loader.php';

use Module\Dato\Controller\DatoController;
use Module\Dato\Entity\TipoDato;

$codigo= filter_input(INPUT_POST, "codigo");
$nombre= filter_input(INPUT_POST, "nombre");

$objEntity=new TipoDato();
$objEntity->setNombre($nombre);
$objEntity->set_codDato($codigo);


$objController = new DatoController;
$objController->update($objEntity);
 
$result = $objController->getAll();




echo json_encode($result);







