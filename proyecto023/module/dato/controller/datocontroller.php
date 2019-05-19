<?php

namespace Module\Dato\Controller;

use Module\Dato\Repository\DatosRepository;
use Module\Dato\Entity\TipoDato;

class DatoController {

    public function add(TipoDato $datos) {
        $objRepository = new DatosRepository();
        return $objRepository->add($datos);
    }

    public function getAll() {
        $objRepository = new DatosRepository();
        return $objRepository->getAll();
    }

    public function getAssoc() {
        $objRepository = new DatosRepository();
        return $objRepository->getAssoc();
    }

    public function getOne(TipoDato $datos) {
        $objRepository = new DatosRepository();
        return $objRepository->getOne($datos);
    }
     public function delete(TipoDato $datos) {
        $objRepository = new DatosRepository();
        return $objRepository->delete($datos);
    }
    public function update(TipoDato $datos) {
        $objRepository = new DatosRepository();
        return $objRepository->update($datos);
    }
}
