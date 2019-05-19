<?php

namespace Module\Pais\Repository;

use Config\Conn;
use Module\Pais\Entity\Pais;
use PDO;

class PaisRepository extends Conn {

    public function getAll() {
        $sql = "SELECT  p.nombre, p.codpais, p.codcontinente , ";
        $sql .= "(SELECT COUNT(c.codcontinente) FROM continente c  WHERE c.codcontinente=p.codcontinente) as cant ";
        $sql .= "FROM pais p ";
        $sql .= "ORDER BY(p.nombre) ASC ";
        $resource = $this->_conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
//            echo "<pre>";
//            print_r($rows);
//            echo "/<pre>";

        return $rows;
    }

    public function add(Pais $objPais) {


        $nombre = $objPais->get_nombre();
        $codContinente = $objPais->get_codContinente();


        $sql = "INSERT INTO pais (nombre, codcontinente ) VALUES (?,?) ";
        $resource = $this->_conn->prepare($sql);

        $resource->bindParam(1, $nombre);
        $resource->bindParam(2, $codContinente);
        $resource->execute();
    }

//    public function getAssoc() {
//
//        $sql = "SELECT  s.codfeligres, s.nombres ";
//        $sql .= "FROM feligres s ";
//        $sql .= " ORDER BY s.codfeligres desc ";
//        $resource = $this->_conn->prepare($sql);
//        $resource->execute();
//        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
//        $arr = array();
//        foreach ($rows as $key => $column) {
//            $arr[$column["codfeligres"]] = $column["nombres"];
//        }
//        return $arr;
//    }
//    public function getChildFeligres(Feligres $feligres) {
//        $cods = $feligres->get_codfeligres();
//
//        $sql = "SELECT (SELECT COUNT(codfeligres1) FROM  voto v WHERE f.codfeligres=v.codfeligres1 )";
//        $sql .= " AS cant FROM feligres f ";
//        $sql .= " WHERE f.codfeligres=? ";
//        $resource = $this->_conn->prepare($sql);
//        $resource->bindParam(1, $cods);
//        $resource->execute();
//        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
//        if (empty($rows)) {
//            return 0;
//        }
//        return $rows[0]["cant"];
//    }
//
//    public function getChildFeligres2(Feligres $feligres) {
//        $cods = $feligres->get_codfeligres();
//        $sql = "SELECT (SELECT COUNT(codfeligres2) FROM  voto v WHERE f.codfeligres=v.codfeligres2 ) ";
//        $sql .= " AS cant FROM feligres f ";
//        $sql .= " WHERE f.codfeligres=? ";
//        $resource = $this->_conn->prepare($sql);
//        $resource->bindParam(1, $cods);
//        $resource->execute();
//        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
//        if (empty($rows)) {
//            return 0;
//        }
//        return $rows[0]["cant"];
//    }
//     public function delete(Feligres $feligres) {
////        $codDelete = $feligres->get_codfeligres();
////        $sql = "DELETE From feligres ";
////        $sql .= "where codfeligres= ? ";
////        $resourse = $this->_conn->prepare($sql);
////        $resourse->bindParam(1, $codDelete);
////        $resourse->execute();
//
//
//        return $resourse;
//    }
    public function getOne(Pais $pais) {
        $codpais = $pais->get_codPais;
        $sql = "SELECT p.nombre, p.codpais ";
        $sql .= "FROM pais p ";
        $sql .= "WHERE p.codpais= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codpais);
        $resourse->execute();
        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
        if (empty($row)) {
            return null;
        }
        return $row[0];
    }

//public function update(Feligres $feligres) {
//
//        $sql = "UPDATE persona ";
//        $sql .= "SET nombres= ? , apellidos= ?,  fechanacimiento= ?, genero= ?  ";
//        $sql .= "WHERE codfeligres= ? ";
//        $resourse = $this->_conn->prepare($sql);
//        
//        $codPersona = $feligres->get_codfeligres();
//        $nombresInterno = $feligres->get_nombres();
//        $apellidosInterno = $feligres->get_apellidos();
//        $generoInterno = $feligres->get_genero();
//        $fechanacimientoInterno = $feligres->get_fechanacimiento();
//
//        $resourse->bindParam(1, $nombresInterno);
//        $resourse->bindParam(2, $apellidosInterno);
//        $resourse->bindParam(3, $fechanacimientoInterno);
//        $resourse->bindParam(4, $generoInterno);
//        $resourse->bindParam(5, $codPersona);
//
//        $resourse->execute();
//
//        return $resourse;
//    }
}
