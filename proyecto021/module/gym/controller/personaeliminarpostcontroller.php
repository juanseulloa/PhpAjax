
<?php

use Module\Gym\Entity\Persona;
use Module\Gym\Controller\PersonaController;

require_once '../../../config/loader.php';



$codigon = filter_input(INPUT_GET, "cod");
$keyn = filter_input(INPUT_GET, "key");
$verificacion = md5($codigon);



if ($keyn == $verificacion) {
    $msj=134;
    $objpersona=new Persona();
    $objpersona->set_idpersona($codigon);
    
    $objPersonaController=new PersonaController();
    $result=$objPersonaController->deletePersona($objpersona);
    header("location:../../../module/gym/view/personas_admin.php?msj={$msj}");
    
} else {
   $msj=135;
    header("location:../../../module/gym/view/personas_admin.php?msj={$msj}");
    
}
?>
