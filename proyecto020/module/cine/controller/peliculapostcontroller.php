
<?php

use Module\Cine\Entity\Pelicula;
use Module\Cine\Controller\PeliculaController;

require_once '../../../config/loader.php';

$nombre = filter_input(INPUT_POST, "nom");
$fecha = filter_input(INPUT_POST, "fec");
$codpel = filter_input(INPUT_POST, "pelicula");


$nombrelenth = 20;
$nombrelengthReal = strlen($nombre);



if ($nombrelengthReal > $nombrelenth) {
    $msg = 346;
    header("location:../../../Module/cine/view/crearpelicula.php?msg={$msg}");
} else {

    $msj=132;
    $objentity = new Pelicula();
    $objentity->set_codgenero($codpel);
    $objentity->set_fecha($fecha);
    $objentity->set_nombre($nombre);
    
    
    $objcontroller = new PeliculaController();
    $objcontroller->addAuxilio($objentity);
    
    header("location:../../../Module/cine/view/crearpelicula.php?msg={$msg}");
    
    
}
?>
