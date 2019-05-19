<?php

namespace Module\Planeta\Repository;

use Config\Conn;
use Module\Planeta\Entity\Planeta;
use PDO;

class PlanetaRepository extends Conn {

//    public function add(Planeta $planeta) {
//        $nombre = $planeta->get_nombre();
//        $sql = "INSERT INTO planeta (nombre) VALUES (?) ";
//        $resource = $this->_conn->prepare($sql);
//
//        $resource->bindParam(1, $nombre);
//        $resource->execute();
//    }

    public function getAll() {
        $campos = "p.nombre AS nombreplaneta, c.nombre As nombrecontinente, pa.nombre AS nombrepais ";
         $sql = "SELECT {$campos} ";
        $sql .= "FROM planeta p  inner join continente c on p.codplaneta=c.codplaneta ";
        $sql .= " inner join pais pa  on c.codcontinente = pa.codcontinente ";
        $sql .= "ORDER BY p.nombre,c.nombre,pa.nombre ASC ";
        $resource = $this->_conn->prepare($sql);

        $resource->execute();

        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }

    public function getOne(Planeta $planeta) {
        $codplaneta = $planeta->get_codplaneta();
        $sql = "SELECT pl.nombre, pl.codcontinente ";
        $sql .= "FROM continente pl ";
        $sql .= "WHERE pl.codplaneta= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codplaneta);
        $resourse->execute();
        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getAssoc() {
        $sql = "SELECT  pl.nombre  , pl.codplaneta  ";
        $sql .= "FROM planeta pl";
        $sql .= " ORDER BY pl.nombre ASC ";
        $resource = $this->_conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        $arr = array();
        foreach ($rows as $key => $column) {
            $arr[$column["codplaneta"]] = $column["nombre"];
        }
        return $arr;
    }

}
