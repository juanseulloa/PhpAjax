<?php

namespace Module\Sacramento\Entity;

class Sacramento {

    private $_codSacramento;
    private $_nombreSacramento;
    

    function __construct() {
        
    }
    public function get_codSacramento() {
        return $this->_codSacramento;
    }

    public function get_nombreSacramento() {
        return $this->_nombreSacramento;
    }

    public function set_codSacramento($_codSacramento) {
        $this->_codSacramento = $_codSacramento;
    }

    public function set_nombreSacramento($_nombreSacramento) {
        $this->_nombreSacramento = $_nombreSacramento;
    }


    
}
