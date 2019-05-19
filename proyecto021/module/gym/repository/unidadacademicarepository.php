<?php

namespace Module\Gym\Repository;

use Module\Gym\Entity\UnidadAcademica;
use Config\Conn;
use PDO;

class UnidadAcademicaRepository extends Conn {

    public function getAll() {
        $sql = "SELECT u.idunidadacademica,u.nombreua,u.tipoua ";
        $sql .= "FROM unidadacademica u ";
        $sql .= "ORDER by u.idunidadacademica desc ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->execute();
        $rows = $resourse->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function add(UnidadAcademica $unidadacademica) {
        $sql = "INSERT into unidadacademica(nombreua,tipoua)";
        $sql .= "values (?,?)";
        $resourse = $this->_conn->prepare($sql);
        $tipouaIterno = $unidadacademica->get_tipoua();
        $nombreuaInterno = $unidadacademica->get_nombreua();
    
        $resourse->bindParam(1, $nombreuaInterno);
        $resourse->bindParam(2, $tipouaIterno);
        
        $resourse->execute();
        return $resourse;
    }

}
