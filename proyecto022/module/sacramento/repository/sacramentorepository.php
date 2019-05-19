<?php

namespace Module\Sacramento\Repository;

use Config\Conn;
use Module\Sacramento\Entity\Sacramento;
use PDO;

class SacramentoRepository extends Conn {

    public function getAll() {
        $sql = "SELECT  s.codsacramento, s.nombresacramento, ";
        $sql .= "(SELECT COUNT(v.codsacramento) FROM voto v  WHERE v.codsacramento=s.codsacramento) as cant ";
        $sql .= "FROM sacramento s  ";
        $sql .= "ORDER BY codsacramento ASC ";
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

        $sql = "SELECT  s.codsacramento, s.nombresacramento ";
        $sql .= "FROM sacramento s ";
        $sql .= " ORDER BY s.codsacramento desc ";
        $resource = $this->_conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        $arr = array();
        foreach ($rows as $key => $column) {
            $arr[$column["codsacramento"]] = $column["nombresacramento"];
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
      public function getOneName(Sacramento $sacramento) {
        $codsacramento = $sacramento->get_codSacramento();
        
        $sql = "SELECT s.nombresacramento ";
        $sql .= "FROM sacramento s ";
        $sql .= "WHERE s.codsacramento= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codsacramento);
        $resourse->execute();
        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
        if (empty($row)) {
            return null;
        }
        return $row[0]["nombresacramento"];
    }

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
