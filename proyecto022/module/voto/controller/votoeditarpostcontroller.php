<?php
require_once '../../../config/loader.php';


use Module\Voto\Controller\VotoController;
use Module\Voto\Entity\Voto;
use Vendor\Utility\Validar;

$feligres = filter_input(INPUT_POST, "feli1");
$feligres2 = filter_input(INPUT_POST, "feli");
$sacramento = filter_input(INPUT_POST, "sacramento");



if ($feligres == $feligres2) {
    $msg = 233;
    header("location: ../view/crearvoto.php?msg={$msg}");
} else {
    $msg = 133;
    $objVoto = new Voto;

    $objVoto->set_codFeligres1($feligres);
    $objVoto->set_codFeligres2($feligres2);
    $objVoto->set_codSacramento($sacramento);
    
    $objController = new VotoController();
    $objController->add($objVoto);
    
    header("location: ../view/voto.php?msg={$msg}");
}

    





