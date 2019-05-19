<?php

namespace Module\Nombre\Repository;

use Config\Conn;
use Module\Nombre\Entity\Nombre;
use PDO;

class NombreRepository extends Conn {

    public function getAll() {
        $sql = "SELECT  c.codcontinente, c.nombre, c.codplaneta, ";
        $sql .= "(SELECT COUNT(p.codcontinente) FROM pais p WHERE p.codcontinente = c.codcontinente) as hijos ";
        $sql .= "FROM continente c  ";
        $sql .= "ORDER BY (c.nombre) ASC ";
        $resource = $this->_conn->prepare($sql);

        $resource->execute();

        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function add(Sacramento $objSacramento) {
        $nombreSacramento = $objSacramento->get_nombreSacramento();
        $sql = "INSERT INTO sacramento ( nombresacramento) VALUES (?) ";
        $resource = $this->_conn->prepare($sql);

        $resource->bindParam(1, $nombreSacramento);

        $resource->execute();
    }

    public function getAssoc() {

        $sql = "SELECT  c.codcontinente, c.nombre ";
        $sql .= "FROM continente c ";
        $sql .= " ORDER BY c.nombre ASC ";
        $resource = $this->_conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        $arr = array();
        foreach ($rows as $key => $column) {
            $arr[$column["codcontinente"]] = $column["nombre"];
        }
        return $arr;
    }

    public function delete(Sacramento $sacramento) {
        $codDelete = $sacramento->get_codSacramento();
        $sql = "DELETE From sacramento ";
        $sql .= "where codsacramento= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codDelete);
        $resourse->execute();


        return $resourse;
    }

    public function getOne(Sacramento $sacramento) {
        $codsacramento = $sacramento->get_codSacramento();
        $sql = "SELECT s.nombresacramento, s.codsacramento ";
        $sql .= "FROM sacramento s ";
        $sql .= "WHERE s.codsacramento= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codsacramento);
        $resourse->execute();
        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
        if (empty($row)) {
            return null;
        }
        return $row[0];
    }
//      public function getOneName() {
//       // $codcontinente = $continente->get_codContinente();
//        
//        $sql = "SELECT c.nombre ";
//        $sql .= "FROM continente c ";
//        $sql .= "WHERE c.codcontinente= 1 ";
//        $resourse = $this->_conn->prepare($sql);
//       // $resourse->bindParam(1, $codcontinente);
//        $resourse->execute();
//        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
//        if (empty($row)) {
//            return null;
//        }
//        return $row[0]["nombre"];
//    }

    public function update(Sacramento $sacramento) {

        $sql = "UPDATE sacramento ";
        $sql .= "SET nombresacramento=?  ";
        $sql .= "WHERE codsacramento= ? ";
        $resourse = $this->_conn->prepare($sql);

        $codsacramento = $sacramento->get_codfeligres();
        $nombresInterno = $sacramento->get_nombreSacramento();


        $resourse->bindParam(1, $nombresInterno);
        $resourse->bindParam(2, $codsacramento);

        $resourse->execute();

        return $resourse;
    }
   
    

}
