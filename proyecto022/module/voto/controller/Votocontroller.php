<?php

namespace Module\Voto\Controller;

use Module\Voto\Repository\VotoRepository;
use Module\Voto\Entity\Voto;

class VotoController {

    public function add(Voto $voto) {
        $objRepository = new VotoRepository();
        return $objRepository->add($voto);
    }
    public function getAll() {
        $objRepository = new VotoRepository();
        return $objRepository->getAll();
    }


}
