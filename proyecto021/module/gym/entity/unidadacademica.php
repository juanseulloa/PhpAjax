<?php
namespace Module\Gym\Entity;

class UnidadAcademica {

    private $_idunidadAcademica;
    private $_nombreua;
    private $_tipoua;

    public function __construct() {
        
    }

    public function get_idunidadAcademica() {
        return $this->_idunidadAcademica;
    }

    public function get_nombreua() {
        return $this->_nombreua;
    }

    public function get_tipoua() {
        return $this->_tipoua;
    }

    public function set_idunidadAcademica($_idunidadAcademica) {
        $this->_idunidadAcademica = $_idunidadAcademica;
    }

    public function set_nombreua($_nombreua) {
        $this->_nombreua = $_nombreua;
    }

    public function set_tipoua($_tipoua) {
        $this->_tipoua = $_tipoua;
    }

}
?>