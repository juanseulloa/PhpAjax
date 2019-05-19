<?php

require_once '../../../config/loader.php';

use Module\Sacramento\Controller\SacramentoController;
use Module\Sacramento\Entity\Sacramento;

$codigon = filter_input(INPUT_POST, "codigo");
$keyn = filter_input(INPUT_POST, "hash");
$verificacion = md5($codigon);

$nombreSacramento = filter_input(INPUT_POST, "nom");

$sacramento = new Sacramento();
$sacramento->set_codSacramento($codigon);
$sacramento->set_nombreSacramento($nombreSacramento);

if ($keyn == $verificacion) {
    $msg = 133;

    $objController = new SacramentoController();
    $objController->update($sacramento);

    header("location: ../view/administarsacramento.php?msg={$msg}");
} else {
    $msg = 134;

    echo 'eres un hacker';
}   

    





