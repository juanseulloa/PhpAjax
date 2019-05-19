<?php

namespace Module\Sacramento\Controller;

use Module\Sacramento\Repository\SacramentoRepository;
use Module\Sacramento\Entity\Sacramento;

class SacramentoController {
    public function getAll() {
        $objRepository = new SacramentoRepository();
        return $objRepository->getAll();
    }
    public function getAssoc() {
        $objRepository = new SacramentoRepository();
        return $objRepository->getAssoc();
    }
    public function add(Sacramento $sacramento) {
        $objRepository = new SacramentoRepository;
        return $objRepository->add($sacramento);
    }
    public function deleteSacramento(Sacramento $sacramento) {
        $objRepository = new SacramentoRepository;
        return $objRepository->delete($sacramento);
    }
    public function getOne(Sacramento $sacramento) {
        $objRepository = new SacramentoRepository;
        return $objRepository->getOne($sacramento);
    }
    public function update(Sacramento $sacramento) {
        $objRepository = new SacramentoRepository;
        return $objRepository->update($sacramento);
    }
     public function getOneName(Sacramento $sacramento) {
        $objRepository = new SacramentoRepository;
        return $objRepository->getOneName($sacramento);
    }
}
