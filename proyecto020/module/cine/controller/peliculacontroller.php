<?php

namespace Module\Cine\Controller;

use Module\Cine\Repository\PeliculaRepository;
use Module\Cine\Entity\Pelicula;
class PeliculaController {

    
    public function addAuxilio(Pelicula $pelicula){
        $objRepository=new PeliculaRepository();
        return $objRepository->add($pelicula);
    }
    
   

}

?>