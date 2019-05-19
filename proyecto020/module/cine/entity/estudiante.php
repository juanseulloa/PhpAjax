<?php
namespace Module\Cine\Entity;

class Genero {
    private $_codgenero;
    private $_nombre;
  
    
    public function __construct() {
        
    }
    function get_codgenero() {
        return $this->_codgenero;
    }

    function get_nombre() {
        return $this->_nombre;
    }

    function set_codgenero($_codgenero) {
        $this->_codgenero = $_codgenero;
    }

    function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }



}