<?php

require_once '../../../config/loader.php';

use Module\Feligres\Controller\FeligresController;
use Module\Feligres\Entity\Feligres;


$codigon = filter_input(INPUT_POST, "codigo");
$keyn = filter_input(INPUT_POST, "hash");
$verificacion = md5($codigon);

$nombres = filter_input(INPUT_POST, "nom");
$apellidos = filter_input(INPUT_POST, "ape");
$fecha = filter_input(INPUT_POST, "fecha");
$genero = filter_input(INPUT_POST, "genero");

$objFeligres = new Feligres();
$objFeligres->set_codfeligres($codigon);
$objFeligres->set_nombres($nombres);
$objFeligres->set_apellidos($apellidos);
$objFeligres->set_fechaNacimiento($fecha);
$objFeligres->set_genero($genero);


if ($keyn == $verificacion) {
    $msg = 133;

    $objController = new FeligresController();
    $objController->update($feligres);

    header("location: ../view/administarfeligres.php?msg={$msg}");
} else {
    $msg = 134;

    echo 'eres un hacker';
}   

    





