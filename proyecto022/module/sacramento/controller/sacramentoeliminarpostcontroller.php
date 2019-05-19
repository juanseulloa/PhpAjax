<?php

require_once '../../../config/loader.php';

use Module\Sacramento\Controller\SacramentoController;
use Module\Sacramento\Entity\Sacramento;

$codigon = filter_input(INPUT_GET, "cod");
$keyn = filter_input(INPUT_GET, "key");
$verificacion = md5($codigon);
if ($keyn == $verificacion) {
    $msj = 134;
    $objSacramento = new Sacramento();
    $objSacramento->set_codSacramento($codigon);

    $objController = new SacramentoController();
    $result = $objController->deleteSacramento($objSacramento);
    header("location:../../../module/sacramento/view/administrarsacramento.php?msj={$msj}");
} else {
    $msj = 135;
    header("location:../../../module/sacramento/view/administrarsacramento.php?msj={$msj}");
}  
    





