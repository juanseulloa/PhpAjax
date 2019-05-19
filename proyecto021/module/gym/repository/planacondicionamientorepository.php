<?php

namespace Module\Gym\Repository;

use Module\Gym\Entity\PlanAcondicionamiento;
use Config\Conn;
use PDO;

class PlanAcondicionamientoRepository extends Conn{

    public function getAll() {
        $sql = "SELECT p.idplanacondicionamiento,p.idseguimiento,p.biotipo,p.tipoplan,p.nombre ";
        $sql .= "FROM planacondicionamiento p ";
        $sql .= "ORDER by p.idplanacondicionamiento desc ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->execute();
        $rows = $resourse->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function add(PlanAcondicionamiento $plana) {
        $sql = "INSERT into planacondicionamiento (nombre,tipoplan,biotipo)";
        $sql .= "values (?,?,?)";
        $resourse = $this->_conn->prepare($sql);
        $nombreInterno = $plana->getNombrePlan();
        $tipoPlanInterno = $plana->getTipoPlan();
        $biotipoInterno = $plana->getBiotipo();
        


        $resourse->bindParam(1, $nombreInterno);
        $resourse->bindParam(2, $tipoPlanInterno);
        $resourse->bindParam(3, $biotipoInterno);
          
        //echo $nombreInterno;
         //$resourse->debugDumpParams();
         //echo $tipoPlanInterno;
        $resourse->execute();
       
       
        return $resourse;
    }

}
