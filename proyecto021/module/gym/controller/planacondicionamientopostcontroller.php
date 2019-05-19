<?php

namespace Module\Gym\Controller;

use Module\Gym\Entity\PlanAcondicionamiento;
use Module\Gym\Controller\PlanAcondicionamientoController;

require_once '../../../config/loader.php';


$nombreplan = filter_input(INPUT_POST, "nombre");
$tipoplan = filter_input(INPUT_POST, "tipoplan");
$biotipo = filter_input(INPUT_POST, "biotipo");

$nombrelength = 20;
$nombrelengthReal = strlen($nombreplan);

$tipolength = 20;
$tipolengthReal = strlen($tipoplan);




if ($nombrelengthReal > $nombrelength || $tipolengthReal > $tipolength) {
    $msg = 346;
     header("location:../../../module/gym/view/formularioplan.php?msg={$msg}");
}else if (empty ($biotipo)) {
    $msg=347;
     header("location:../../../module/gym/view/formularioplan.php?msg={$msg}");
} else {
    $objentity = new PlanAcondicionamiento();
    $objentity->setNombrePlan($nombreplan);
    $objentity->setTipoPlan($tipoplan);
    $objentity->setBiotipo($biotipo);


    $objpersonacontroller = new PlanAcondicionamientoController();
    $result = $objpersonacontroller->addPlanAcondicionamiento($objentity);
    $msg = 139;

   header("location:../../../module/gym/view/planacondicionamiento.php?msg={$msg}");
//var_dump($result);
}