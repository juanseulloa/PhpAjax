<?php

require_once '../../../config/loader.php';

use Module\Gym\Entity\Persona;
use Module\Gym\Controller\PersonaController;

$codigon = filter_input(INPUT_POST, "codigo");
$keyn = filter_input(INPUT_POST, "hash");
$verificacion = md5($codigon);

$nombre = filter_input(INPUT_POST, "nombre");
$documento = filter_input(INPUT_POST, "documento");
$apellidos = filter_input(INPUT_POST, "apellido");
$genero = filter_input(INPUT_POST, "genero");
$fechanacimiento = filter_input(INPUT_POST, "fec");

$persona = new Persona();
$persona->set_idpersona($codigon);
$persona->set_nombre($nombre);
$persona->set_apellidos($apellidos);
$persona->set_documento($documento);
$persona->set_genero($genero);
$persona->set_fechanacimiento($fechanacimiento);


if ($keyn == $verificacion) {
    $msj = 134;
    $objPersona = new PersonaController();
    $objPersona->updatePersona($persona);

    header("location:../../../module/gym/view/personas_admin.php?msj={$msj}");
    
} else {
    $msj = 135;

    echo 'eres un jacker';
}
?>
