<?php
namespace Module\Gym\Entity;

class Persona {
    private $_idpersona;
    private $_idunidadacademica;
    private $_documento;
    private $_nombre;
    private $_apellidos;
    private $_genero;
    private $_fechanacimiento;
    
    public function __construct() {
        
    }
    function get_idunidadacademica() {
        return $this->_idunidadacademica;
    }

    function set_idunidadacademica($_idunidadacademica) {
        $this->_idunidadacademica = $_idunidadacademica;
    }

        public function get_idpersona() {
        return $this->_idpersona;
    }

    public function get_documento() {
        return $this->_documento;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function get_apellidos() {
        return $this->_apellidos;
    }

    public function get_genero() {
        return $this->_genero;
    }

    public function get_fechanacimiento() {
        return $this->_fechanacimiento;
    }

    public function set_idpersona($_idpersona) {
        $this->_idpersona = $_idpersona;
    }

    public function set_documento($_documento) {
        $this->_documento = $_documento;
    }

    public function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    public function set_apellidos($_apellidos) {
        $this->_apellidos = $_apellidos;
    }

    public function set_genero($_genero) {
        $this->_genero = $_genero;
    }

    public function set_fechanacimiento($_fechanacimiento) {
        $this->_fechanacimiento = $_fechanacimiento;
    }




            
   

    
   

}
