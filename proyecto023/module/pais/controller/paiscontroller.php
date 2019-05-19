<?php

namespace Module\Pais\Controller;

use Module\Pais\Repository\PaisRepository;
use Module\Pais\Entity\Pais;

class PaisController {

    public function getAll() {
        $objRepository = new PaisRepository();
        return $objRepository->getAll();
    }

    public function add(Pais $pais) {
        $objRepository = new PaisRepository();
        return $objRepository->add($pais);
    }

//
//    public function getAssoc() {
//        $objRepository = new FeligresRepository();
//        return $objRepository->getAssoc();
//    }
//
//    public function getChilFeligres(Feligres $feligres) {
//        $objRepository = new FeligresRepository();
//        return $objRepository->getChildFeligres($feligres);
//    }
//
//    public function deleteFeligres(Feligres $feligres) {
//        $objRepository = new FeligresRepository();
//        return $objRepository->delete($feligres);
//    }

    public function getOne(Pais $pais) {
        $objRepository = new PaisRepository();
        return $objRepository->getOne($pais);
    }

//
//    public function update(Feligres $feligres) {
//        $objRepository = new FeligresRepository();
//        return $objRepository->update($feligres);
//    }
}
