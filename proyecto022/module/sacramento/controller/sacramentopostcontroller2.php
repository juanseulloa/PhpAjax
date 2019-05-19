<?php

require_once '../../../config/loader.php';

use Module\Sacramento\Controller\SacramentoController;
use Module\Sacramento\Entity\Sacramento;


$codSacramento = filter_input(INPUT_POST, "codajax");

$sacramento=new Sacramento();
$sacramento->set_codSacramento($codSacramento);


$objController=new SacramentoController();
$result =$objController->getOneName($sacramento);

//echo $result;
$array=[];
$array["code"]="nom".$codSacramento;
$array["value"]=$result;

echo json_encode($array);
    





