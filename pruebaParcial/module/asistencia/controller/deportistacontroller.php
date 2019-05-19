<?php

namespace Module\Gym\Controller;

use Module\Gym\Repository\DeportistaRepository;
use Module\Gym\Entity\Persona;
class DeportistaController {

    public function getAllPersona() {
        $objRepository = new DeportistaRepository();
        return $objRepository->getAll();
    }
    public function addPersona(Persona $olga){
        $objRepository=new DeportistaRepository();
        return $objRepository->add($olga);
    } 
    public function  deletePersona(Persona $persona){
        $objRepository=new DeportistaRepository();
        return $objRepository->delete($persona);
    }
    public function  getOnePersona(Persona $persona){
        $objRepository=new PersonaRepository();
        return $objRepository->getOne($persona);
    }
    public function  updatePersona(Persona $persona){
        $objRepository=new PersonaRepository();
        return $objRepository->update($persona);
    }
    
    

}

?>