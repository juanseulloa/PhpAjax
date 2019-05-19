<?php

namespace Module\Gym\Controller;

use Module\Gym\Repository\PersonaRepository;
use Module\Gym\Entity\Persona;
class PersonaController {

    public function getAllPersona() {
        $objRepository = new PersonaRepository();
        return $objRepository->getAll();
    }
    public function addPersona(Persona $olga){
        $objRepository=new PersonaRepository();
        return $objRepository->add($olga);
    } 
    public function  deletePersona(Persona $persona){
        $objRepository=new PersonaRepository();
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