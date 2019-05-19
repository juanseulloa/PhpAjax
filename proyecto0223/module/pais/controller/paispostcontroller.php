<?php
require_once '../../../config/loader.php';

use Module\Pais\Controller\PaisController;
use Module\Pais\Entity\Pais;
use Vendor\Utility\Validar;

$nombre = filter_input(INPUT_POST, "pais");
$codContinente = filter_input(INPUT_POST, "continente");

if (!Validar::validarString($nombre, 5, 30)) {
    $msg = 233;
    header("location: ../view/crearpais.php?msg={$msg}");
} else {
    $msg = 133;
    $objPais = new Pais();

    $objPais->set_nombre($nombre);
    $objPais->set_codContinente($codContinente);
    
    $objController = new PaisController();
    $objController->add($objPais);
    
    header("location: ../../planeta/view/planeta.php?msg={$msg}");


//    header("location: ../view/sacramento.php?msg={$msg}");
}

    





