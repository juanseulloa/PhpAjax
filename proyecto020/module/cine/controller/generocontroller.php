<?php

namespace Module\Cine\Controller;

use Module\Cine\Repository\GeneroRepository;

class GeneroController {

    
   public function getAssocPeriodo() {
        $objRepository = new GeneroRepository();
        return $objRepository->getAssoc();
    }
    
    

}

?>