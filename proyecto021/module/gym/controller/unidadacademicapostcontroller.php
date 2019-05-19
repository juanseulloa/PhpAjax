<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Module\Gym\Entity\UnidadAcademica;
use Module\Gym\Controller\UnidadAcademicaController;

require_once '../../../config/loader.php';


$nombreua = filter_input(INPUT_POST, "nomua");
$tipoua = filter_input(INPUT_POST, "tipua");

$objentityua = new UnidadAcademica();
$objentityua->set_nombreua($nombreua);
$objentityua->set_tipoua($tipoua);

$objControllerua = new UnidadAcademicaController();
$results = $objControllerua->addUnidadAcademica($objentityua);

require_once '../view/unidadacademica.php';

?>


