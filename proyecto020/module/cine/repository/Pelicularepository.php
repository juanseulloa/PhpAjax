<?php

namespace Module\Cine\Repository;

use Module\Cine\Entity\Pelicula;
use Config\Conn;
use PDO;

class PeliculaRepository extends Conn {

    public function add(Pelicula $pelicula) {
        $nombre=$pelicula->get_nombre();
        $fecha=$pelicula->get_fecha();
        $codGenero=$pelicula->get_codgenero();
        
        $sql = "INSERT into pelicula (nombrepelicula,fecha,codgenero) values (?,?,?) ";
        
        $resourse = $this->_conn->prepare($sql);

        $resourse->bindParam(1, $nombre);
        $resourse->bindParam(2, $fecha);
        $resourse->bindParam(3, $codGenero);
        

        $resourse->execute();

        //$resourse->debugDumpParams();

        return $resourse;
    }


}

?>