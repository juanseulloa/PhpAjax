<?php

namespace Module\Gym\Repository;

use Module\Gym\Entity\Persona;
use Config\Conn;
use PDO;

class DeportistaRepository extends Conn {

    public function getAll() {
        $sql = "SELECT p.idpersona,p.nombre,p.apellidos,p.documento,p.genero,p.fechanacimiento ";
        $sql .= "(select count(idunidadacademica) from unidadacademica where idunidadacadenica= idunidadacademica) as cantidadhijos ";
        $sql .= "FROM persona p ";
        $sql .= "ORDER by p.idpersona desc ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->execute();
        $rows = $resourse->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function add(Persona $zulma) {
        $sql = "INSERT into persona(documento,nombre,apellidos,genero,fechanacimiento,idunidadacademica)";
        $sql .= "values (?,?,?,?,?,?)";
        $resourse = $this->_conn->prepare($sql);
        $docuemntoInterno = $zulma->get_documento();
        $nombreInterno = $zulma->get_nombre();
        $apellidosInterno = $zulma->get_apellidos();
        $generoInterno = $zulma->get_genero();
        $fechaNacimientoInterno = $zulma->get_fechanacimiento();
        $idUnidadAcademica=$zulma->get_idunidadacademica();


        $resourse->bindParam(1, $docuemntoInterno);
        $resourse->bindParam(2, $nombreInterno);
        $resourse->bindParam(3, $apellidosInterno);
        $resourse->bindParam(4, $generoInterno);
        $resourse->bindParam(5, $fechaNacimientoInterno);
        $resourse->bindParam(6, $idUnidadAcademica);
        

        $resourse->execute();

        //$resourse->debugDumpParams();

        return $resourse;
    }

    public function delete(Persona $persona) {
        $codDelete = $persona->get_idpersona();
        $sql = "DELETE From persona ";
        $sql .= "where idpersona= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codDelete);
        $resourse->execute();


        return $resourse;
    }

    public function getOne(Persona $persona) {
        $codPersona = $persona->get_idpersona();
        $sql = "SELECT p.idpersona, p.nombre, p.apellidos, p.documento, p.genero, p.fechanacimiento ";
        $sql .= "FROM persona p ";
        $sql .= "WHERE p.idpersona= ? ";
        $resourse = $this->_conn->prepare($sql);
        $resourse->bindParam(1, $codPersona);
        $resourse->execute();
        $row = $resourse->fetchAll(PDO::FETCH_ASSOC);
        if (empty($row)) {
            return null;
        }
        return $row[0];
    }

    public function update(Persona $persona) {

        $sql = "UPDATE persona ";
        $sql .= "SET nombre= ? , apellidos= ? , documento= ? , genero= ? , fechanacimiento= ?  ";
        $sql .= "WHERE idpersona= ? ";
        $resourse = $this->_conn->prepare($sql);
        
        $codPersona = $persona->get_idpersona();
        $docuemntoInterno = $persona->get_documento();
        $nombreInterno = $persona->get_nombre();
        $apellidosInterno = $persona->get_apellidos();
        $generoInterno = $persona->get_genero();
        $fechanacimientoInterno = $persona->get_fechanacimiento();

        $resourse->bindParam(1, $nombreInterno);
        $resourse->bindParam(2, $apellidosInterno);
        $resourse->bindParam(3, $docuemntoInterno);
        $resourse->bindParam(4, $generoInterno);
        $resourse->bindParam(5, $fechanacimientoInterno);
        $resourse->bindParam(6, $codPersona);

        $resourse->execute();

        return $resourse;
    }

}

?>