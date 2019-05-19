<?php

namespace Module\Feligres\Controller;

use Module\Feligres\Repository\FeligresRepository;
use Module\Feligres\Entity\Feligres;

class FeligresController {

    public function getAll() {
        $objRepository = new FeligresRepository();
        return $objRepository->getAll();
    }

    public function add(Feligres $feligres) {
        $objRepository = new FeligresRepository();
        return $objRepository->add($feligres);
    }

    public function getAssoc() {
        $objRepository = new FeligresRepository();
        return $objRepository->getAssoc();
    }

    public function getChilFeligres(Feligres $feligres) {
        $objRepository = new FeligresRepository();
        return $objRepository->getChildFeligres($feligres);
    }

    public function deleteFeligres(Feligres $feligres) {
        $objRepository = new FeligresRepository();
        return $objRepository->delete($feligres);
    }

    public function getOne(Feligres $feligres) {
        $objRepository = new FeligresRepository();
        return $objRepository->getOne($feligres);
    }

    public function update(Feligres $feligres) {
        $objRepository = new FeligresRepository();
        return $objRepository->update($feligres);
    }

}
