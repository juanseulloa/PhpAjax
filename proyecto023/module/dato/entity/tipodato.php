<?php

namespace Module\Dato\Entity;

class TipoDato {

    private $_codDato;
    private $nombre;

    function __construct() {
        
    }
    public function get_codDato() {
        return $this->_codDato;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function set_codDato($_codDato) {
        $this->_codDato = $_codDato;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }



}
