<?php

namespace Module\Planeta\Controller;

use Module\Planeta\Repository\PlanetaRepository;
use Module\Planeta\Entity\Planeta;

class PlanetaController {

    public function getAll() {
        $objRepository = new PlanetaRepository();
        return $objRepository->getAll();
    }

    public function getAssoc() {
        $objRepository = new PlanetaRepository();
        return $objRepository->getAssoc();
    }
 public function getOne(Planeta $planeta ) {
        $objRepository = new PlanetaRepository();
        return $objRepository->getOne($planeta);
    }
}
