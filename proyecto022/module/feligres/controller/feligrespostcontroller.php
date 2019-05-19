<?php

require_once '../../../config/loader.php';

use Module\Feligres\Controller\FeligresController;
use Module\Feligres\Entity\Feligres;
use Vendor\Utility\Validar;



$nombres = filter_input(INPUT_POST, "nom");
$apellidos = filter_input(INPUT_POST, "ape");
$fecha = filter_input(INPUT_POST, "fecha");
$genero = filter_input(INPUT_POST, "genero");




if (!Validar::validarString($nombres, 4, 40) ||! Validar::validarString($apellidos, 4, 40)) {
    $msg = 233;
     header("location: ../view/crearfeligres.php?msg={$msg}");
} else {
    $msg=133;
    
    $objFeligres=new Feligres();
    $objFeligres->set_nombres($nombres);
    $objFeligres->set_apellidos($apellidos);
    $objFeligres->set_fechaNacimiento($fecha);
    $objFeligres->set_genero($genero);
    
    $objController=new FeligresController();
    $objController->add($objFeligres);
    
     header("location: ../view/feligres.php?msg={$msg}");
}   

    





