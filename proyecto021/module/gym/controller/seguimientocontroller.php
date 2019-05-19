<?php

namespace Module\Gym\Controller;
require_once '../../../config/loader.php';

use Module\Gym\Repository\SeguimientoRepository;

class SeguimientoController {

    public function getAllIds() {
        $objRepository = new SeguimientoRepository();
        return $objRepository->getid();
    }
    public function getAssocSegumimiento() {
        $objRepository = new SeguimientoRepository();
        return $objRepository->getAssoc();
    }
    
    
    
}
