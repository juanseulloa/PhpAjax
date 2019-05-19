<?php


namespace Module\Gym\Controller;
use Module\Gym\Repository\UnidadAcademicaRepository;
use Module\Gym\Entity\UnidadAcademica;

class UnidadAcademicaController {
    
   public function getAllUnidadAcademica(){
        $objRepository= new UnidadAcademicaRepository();
        return $objRepository->getAll();
    }
    public function addUnidadAcademica(UnidadAcademica $unidadAcademica){
        $objRepositoryua= new UnidadAcademicaRepository();
        return $objRepositoryua->add($unidadAcademica);
        
    }
    
}
