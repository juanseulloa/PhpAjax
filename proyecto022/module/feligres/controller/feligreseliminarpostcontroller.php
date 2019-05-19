<?php

require_once '../../../config/loader.php';

use Module\Feligres\Controller\FeligresController;
use Module\Feligres\Entity\Feligres;

$codigon = filter_input(INPUT_GET, "cod");
$keyn = filter_input(INPUT_GET, "key");
$verificacion = md5($codigon);


if ($keyn == $verificacion) {
    $msj = 134;
    $objFeligres = new Feligres();
    $objFeligres->set_codfeligres($codigon);

    $objController = new FeligresController();
    $result = $objController->deleteFeligres($objFeligres);
    header("location:../../../module/feligres/view/administrarfeligres.php?msj={$msj}");
} else {
    $msj = 136;
    header("location:../../../module/feligres/view/administrarfeligres.php?msj={$msj}");
}  

    





