<?php

namespace Module\Planeta\Entity;

class Planeta {

    private $_codplaneta;
    private $_nombre;
    
    

    function __construct() {
        
    }
    public function get_codplaneta() {
        return $this->_codplaneta;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function set_codplaneta($_codplaneta) {
        $this->_codplaneta = $_codplaneta;
    }

    public function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }





}
