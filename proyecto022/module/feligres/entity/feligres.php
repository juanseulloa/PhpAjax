<?php

namespace Module\Feligres\Entity;

class Feligres {

    private $_codfeligres;
    private $_nombres;
    private $_apellidos;
    private $_fechaNacimiento;
    private $_genero;
    
                function __construct() {
        
    }

    public function get_codfeligres() {
        return $this->_codfeligres;
    }

    public function get_nombres() {
        return $this->_nombres;
    }

    public function get_apellidos() {
        return $this->_apellidos;
    }

    public function get_fechaNacimiento() {
        return $this->_fechaNacimiento;
    }

    public function set_codfeligres($_codfeligres) {
        $this->_codfeligres = $_codfeligres;
    }

    public function set_nombres($_nombres) {
        $this->_nombres = $_nombres;
    }

    public function set_apellidos($_apellidos) {
        $this->_apellidos = $_apellidos;
    }

    public function set_fechaNacimiento($_fechaNacimiento) {
        $this->_fechaNacimiento = $_fechaNacimiento;
    }

    public function get_genero() {
        return $this->_genero;
    }

    public function set_genero($_genero) {
        $this->_genero = $_genero;
    }




}
