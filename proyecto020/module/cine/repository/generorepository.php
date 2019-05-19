<?php

namespace Module\Cine\Repository;

require_once '../../../config/loader.php';

use Config\Conn;
use PDO;

class GeneroRepository extends Conn {

    public function getAssoc() {
        $sql = "SELECT g.codgenero, g.nombre ";
        $sql .= "FROM genero g ";
        $sql .= "ORDER by g.codgenero desc ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->execute();
        $rows = $resourse->fetchAll(PDO::FETCH_ASSOC);
        $myArray = array();
       
        foreach ($rows as $index => $column) {
            $myArray[$column["codgenero"]] = $column["nombre"];
        }



        return $myArray;
    }

}
