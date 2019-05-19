<?php

namespace Module\Feligres\Repository;

use Config\Conn;
use Module\Feligres\Entity\Feligres;
use PDO;

class FeligresRepository extends Conn {

    public function getAll() {
        $sql = "SELECT  f.nombres , f.apellidos, f.fechanacimiento, f.genero, f.codfeligres,  ";
        $sql .= "(SELECT COUNT(v.codfeligres1) FROM voto v  WHERE v.codfeligres1=f.codfeligres) as cant1 , ";
        $sql .= "(SELECT COUNT(v.codfeligres2)FROM voto v WHERE v.codfeligres2=f.codfeligres) as cant2 ";
        $sql .= "FROM feligres f ";
        $sql .= " ORDER BY(f.codfeligres) DESC";
        $resource = $this->_conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
//        echo "<pre>";
//        print_r($rows);
//        echo "/<pre>";
        
        return $rows;
    }

    public function add(Feligres $objFeligres) {


        $nombres = $objFeligres->get_nombres();
        $apellidos = $objFeligres->get_apellidos();
        $fecha = $objFeligres->get_fechaNacimiento();
        $genero = $objFeligres->get_genero();


        $sql = "INSERT INTO feligres (nombres, apellidos, fechanacimiento, genero ) VALUES (?,?,?,?) ";
        $resource = $this->_conn->prepare($sql);

        $resource->bindParam(1, $nombres);
        $resource->bindParam(2, $apellidos);
        $resource->bindParam(3, $fecha);
        $resource->bindParam(4, $genero);

        $resource->execute();
    }

    public function getAssoc() {

        $sql = "SELECT  s.codfeligres, s.nombres ";
        $sql .= "FROM feligres s ";
        $sql .= " ORDER BY s.codfeligres desc ";
        $resource = $this->_conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        $arr = array();
        foreach ($rows as $key => $column) {
            $arr[$column["codfeligres"]] = $column["nombres"];
        }
        return $arr;
    }

    public function getChildFeligres(Feligres $feligres) {
        $cods = $feligres->get_codfeligres();

        $sql = "SELECT (SELECT COUNT(codfeligres1) FROM  voto v WHERE f.codfeligres=v.codfeligres1 )";
        $sql .= " AS cant FROM feligres f ";
        $sql .= " WHERE f.codfeligres=? ";
        $resource = $this->_conn->prepare($sql);
        $resource->bindParam(1, $cods);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        if (empty($rows)) {
            return 0;
        }
        return $rows[0]["cant"];
    }

    public function getChildFeligres2(Feligres $feligres) {
        $cods = $feligres->get_codfeligres();
        $sql = "SELECT (SELECT COUNT(codfeligres2) FROM  voto v WHERE f.codfeligres=v.codfeligres2 ) ";
        $sql .= " AS cant FROM feligres f ";
        $sql .= " WHERE f.codfeligres=? ";
        $resource = $this->_conn->prepare($sql);
        $resource->bindParam(1, $cods);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        if (empty($rows)) {
            return 0;
        }
        return $rows[0]["cant"];
    }
     public function delete(Feligres $feligres) {
        $codDelete = $feligres->get_codfeligres();
        $sql = "DELETE From feligres ";
        $sql .= "where codfeligres= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codDelete);
        $resourse->execute();


        return $resourse;
    }
     public function getOne(Feligres $feligres) {
        $codfeligres = $feligres->get_codfeligres();
        $sql = "SELECT f.nombres, f.apellidos, f.fechanacimiento, f.genero, f.codfeligres ";
        $sql .= "FROM feligres f ";
        $sql .= "WHERE f.codfeligres= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codfeligres);
        $resourse->execute();
        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
        if (empty($row)) {
            return null;
        }
        return $row[0];
    }
public function update(Feligres $feligres) {

        $sql = "UPDATE persona ";
        $sql .= "SET nombres= ? , apellidos= ?,  fechanacimiento= ?, genero= ?  ";
        $sql .= "WHERE codfeligres= ? ";
        $resourse = $this->_conn->prepare($sql);
        
        $codPersona = $feligres->get_codfeligres();
        $nombresInterno = $feligres->get_nombres();
        $apellidosInterno = $feligres->get_apellidos();
        $generoInterno = $feligres->get_genero();
        $fechanacimientoInterno = $feligres->get_fechanacimiento();

        $resourse->bindParam(1, $nombresInterno);
        $resourse->bindParam(2, $apellidosInterno);
        $resourse->bindParam(3, $fechanacimientoInterno);
        $resourse->bindParam(4, $generoInterno);
        $resourse->bindParam(5, $codPersona);

        $resourse->execute();

        return $resourse;
    }
}
