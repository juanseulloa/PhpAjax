<?php

require_once '../../../config/loader.php';

use Module\Sacramento\Controller\SacramentoController;
use Module\Sacramento\Entity\Sacramento;
use Vendor\Utility\Validar;

$nombreSacramento = filter_input(INPUT_POST, "nom");

if (!Validar::validarString($nombreSacramento, 4, 20)) {
    $msg = 233;
    header("location: ../view/crearsacramento.php?msg={$msg}");
} else {
    $msg = 133;
    $objSacramento = new Sacramento();

    $objSacramento->set_nombreSacramento($nombreSacramento);
    
    $objController = new SacramentoController();
    $objController->add($objSacramento);
    
    header("location: ../view/sacramento.php?msg={$msg}");
}
    





