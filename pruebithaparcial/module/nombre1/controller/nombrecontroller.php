<?php

namespace Module\Nombre\Controller;

use Module\Nombre\Repository\NombreRepository;
use Module\Nombre\Entity\Nombre;

class NuevoController {
    public function getAll() {
        $objRepository = new NombreRepository ();
        return $objRepository->getAll();
    }
    public function getAssoc() {
        $objRepository = new NombreRepository();
        return $objRepository->getAssoc();
    }
    
    public function getOne() {
        $objRepository = new NombreRepository();
        return $objRepository->getOne();
    }
    public function add(Nombre $nombre) {
        $objRepository = new NombreRepository();
        return $objRepository->add($nombre);
    }
    public function delte(Nombre $nombre) {
        $objRepository = new NombreRepository();
        return $objRepository->delete($nombre);
    }
      public function update(Nombre $nombre) {
        $objRepository = new NombreRepository();
        return $objRepository->update($nombre);
    }
}
