<?php

namespace Module\Gym\Repository;

require_once '../../../config/loader.php';

use Config\Conn;
use PDO;

class SeguimientoRepository extends Conn {

    public function getid() {
        $sql = "SELECT s.idseguimiento as value from seguimiento s order by s.idseguimiento DESC";
        //$sql .= "FROM seguimiento s ";
        //$sql .= "ORDER by s.idseguimiento desc ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->execute();
        $rows = $resourse->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function getAssoc() {
        $sql = "SELECT s.idseguimiento, s.nombre ";
        $sql .= "FROM seguimiento s ";
        $sql .= "ORDER by s.idseguimiento desc ";
        $resourse = $this->_conn->prepare($sql);
//         echo "<pre>";
//         $resourse->debugDumpParams();
//         echo "</pre>";
        $resourse->execute();
        $rows = $resourse->fetchAll(PDO::FETCH_ASSOC);
        $myArray = array();
        foreach ($rows as $index => $column) {
            $myArray[$column["idseguimiento"]] = $column["nombre"];
        }
       
         
        return $myArray;
    }

}
