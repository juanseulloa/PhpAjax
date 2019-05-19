<?php

namespace Module\Dato\Repository;

use Config\Conn;
use Module\Dato\Entity\TipoDato;
use PDO;

class DatosRepository extends Conn {
    
        public function add(TipoDato $dato) {
        $nombre = $dato->getNombre();
        $sql = "INSERT INTO tipodatos (nombre) VALUES (?) ";
        $resource = $this->_conn->prepare($sql);

        $resource->bindParam(1, $nombre);
        $resource->execute();
    }


    public function getAll() {
        $sql = "SELECT d.nombre, d.codtipo   ";
        $sql .= "FROM tipodatos d ";
        $sql .= "ORDER by (d.codtipo) ASC ";
        $resource = $this->_conn->prepare($sql);

        $resource->execute();

        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
//        echo '<pre>';
//        print_r($rows);
//        echo '</pre>';
        return $rows;
    }

    public function getOne(TipoDato $datos) {
        $codDato = $datos->get_codDato;
        $sql = "SELECT d.nombre, d.codtipo ";
        $sql .= "FROM tipodatos d ";
        $sql .= "WHERE d.codtipo= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codDato);
        $resourse->execute();
        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getAssoc() {
        $sql = "SELECT  d.nombre  , d.codtipo  ";
        $sql .= "FROM tipodatos d ";
        $sql .= " ORDER BY d.codtipo desc ";
        $resource = $this->_conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        $arr = array();
        foreach ($rows as $key => $column) {
            $arr[$column["codtipo"]] = $column["nombre"];
        }
        return $arr;
    }
     public function delete(TipoDato $dato) {
        $codDelete = $dato->get_codDato();
        $sql = "DELETE From tipodatos ";
        $sql .= "where codtipo= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codDelete);
        $resourse->execute();


        return $resourse;
    }
    public function update(TipoDato $tipodato) {

        $sql = "UPDATE tipodatos ";
        $sql .= "SET nombre=? ";
        $sql .= "WHERE codtipo= ? ";
        $resourse = $this->_conn->prepare($sql);
        
        $codtipo = $tipodato->get_codDato();
        $nombresInterno = $tipodato->getNombre();

        
        $resourse->bindParam(1, $nombresInterno);
        $resourse->bindParam(2, $codtipo);
        
        $resourse->execute();

        return $resourse;
    }


}
