<?php

namespace Module\Pais\Entity;

class Pais {

    private $_codPais;
    private $_nombre;
    private $_codContinente;

    function __construct() {
        
    }

    public function get_codPais() {
        return $this->_codPais;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function get_codContinente() {
        return $this->_codContinente;
    }

    public function set_codPais($_codPais) {
        $this->_codPais = $_codPais;
    }

    public function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    public function set_codContinente($_codContinente) {
        $this->_codContinente = $_codContinente;
    }

}
