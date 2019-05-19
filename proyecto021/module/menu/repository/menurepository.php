<?php

namespace Module\Menu\Repository;

use PDO;
use Config\Conn;

class MenuRepository extends Conn{

    public function count() {
        $sql = "SELECT i.coditem,i.nombre,i.modulo,i.pagina,i.codpadre,(SELECT COUNT(it.coditem) FROM item it WHERE it.codpadre=i.coditem) AS cant ";
        $sql .= "FROM item i ";
        $sql .= "WHERE i.coditem!=1 ";
        $sql .= "ORDER BY(i.codpadre) asc";
        $resourse = $this->_conn->prepare($sql);
        $resourse->execute();
        $rows = $resourse->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

}
