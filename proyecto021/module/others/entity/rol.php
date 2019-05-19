<?php

namespace Module\Others\Entity;

class Rol {

    private $_codrol;
    private $_nameRol;

    public function __construct() {
        
    }

    public function get_codrol() {
        return $this->_codrol;
    }

    public function get_nameRol() {
        return $this->_nameRol;
    }

    public function set_codrol($_codrol) {
        $this->_codrol = $_codrol;
    }

    public function set_nameRol($_nameRol) {
        $this->_nameRol = $_nameRol;
    }

}
?>

