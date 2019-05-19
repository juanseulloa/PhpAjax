<?php

namespace Module\Voto\Repository;

use Config\Conn;
use Module\Voto\Entity\Voto;
use PDO;

class VotoRepository extends Conn {

    public function add(Voto $objVoto) {
        $codFeligres1 = $objVoto->get_codFeligres1();
        $codFeligres2 = $objVoto->get_codFeligres2();
        $codSacramento = $objVoto->get_codSacramento();


        $sql = "INSERT INTO voto (codfeligres1, codfeligres2,codsacramento ) VALUES (?,?,?) ";
        $resource = $this->_conn->prepare($sql);

        $resource->bindParam(1, $codFeligres1);
        $resource->bindParam(2, $codFeligres2);
        $resource->bindParam(3, $codSacramento);

        $resource->execute();
    }
    
    public function getAll() {
        $sql = "SELECT fe.nombres, fe.apellidos,s.nombresacramento, f.nombres, f.apellidos   ";
        $sql .= "FROM feligres f, feligres fe, sacramento s, voto v ";
        $sql .= "WHERE f.codfeligres=v.codfeligres1 and fe.codfeligres=v.codfeligres2 and s.codsacramento=v.codsacramento ";
        $sql .= "ORDER by (s.codsacramento) ASC ";
        $resource = $this->_conn->prepare($sql);
        
        $resource->execute();
        
        $rows = $resource->fetchAll(PDO::FETCH_ASSOC);
        echo '<pre>';
        print_r($rows);
        echo '</pre>';
        return $rows;
    } 

}
