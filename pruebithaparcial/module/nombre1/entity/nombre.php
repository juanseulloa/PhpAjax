<?php

namespace Module\Nombre\Entity;

class Nombre {

    private $_codContinente;
    private $_nombre;
    private $_codPlaneta;
    

    function __construct() {
        
    }
    public function get_codContinente() {
        return $this->_codContinente;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function get_codPlaneta() {
        return $this->_codPlaneta;
    }

    public function set_codContinente($_codContinente) {
        $this->_codContinente = $_codContinente;
    }

    public function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    public function set_codPlaneta($_codPlaneta) {
        $this->_codPlaneta = $_codPlaneta;
    }


}
