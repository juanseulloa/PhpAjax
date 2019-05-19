
<?php

use Module\Gym\Entity\Persona;
use Module\Gym\Controller\DeportistaController;

require_once '../../../config/loader.php';

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
$nombre = filter_input(INPUT_POST, "nombre");
$documento = filter_input(INPUT_POST, "documento");
$apellidos = filter_input(INPUT_POST, "apellido");
$genero = filter_input(INPUT_POST, "genero");
$fechanacimiento = filter_input(INPUT_POST, "fec");


$documentlength = 20;
$documentlengthReal = strlen($documento);

$nombrelength=20;
$nombrelengthReal= strlen($nombre);

$apellidoslength= 20;
$apellidoslengthReal= strlen($apellidos);
$banderaGenero=false;
if ($genero==1|| $genero==2) {
    $banderaGenero=TRUE;
}



if ($documentlengthReal > $documentlength || $nombrelengthReal>$nombrelength || $apellidoslengthReal>$apellidoslength || $banderaGenero==FALSE) {
    $msg = 346;
    header("location:../../../module/gym/view/formulario.php?msg={$msg}");
} else {
    $objentity = new Persona();
    $objentity->set_nombre($nombre);
    $objentity->set_documento($documento);
    $objentity->set_apellidos($apellidos);
    $objentity->set_genero($genero);
    $objentity->set_fechanacimiento($fechanacimiento);

    $objpersonacontroller = new DeportistaController;
    $result = $objpersonacontroller->addPersona($objentity);
    $msg = 139;

    header("location:../../../module/gym/view/index.php?msg={$msg}");
//var_dump($result);
}
?>
