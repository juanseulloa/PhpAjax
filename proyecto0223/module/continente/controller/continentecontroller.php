<?php

namespace Module\Continente\Controller;

use Module\Continente\Repository\ContinenteRepository;
use Module\Continente\Entity\Continente;

class ContinenteController {
    public function getAll() {
        $objRepository = new ContinenteRepository ();
        return $objRepository->getAll();
    }
    public function getAssoc() {
        $objRepository = new ContinenteRepository();
        return $objRepository->getAssoc();
    }
    
    public function getOneName() {
        $objRepository = new ContinenteRepository();
        return $objRepository->getOneName();
    }
}
