<?php

namespace Module\Voto\Entity;

class Voto {

    private $_codFeligres1;
    private $_codFeligres2;
    private $_codSacramento;
    
    
    

    function __construct() {
        
    }
    public function get_codFeligres1() {
        return $this->_codFeligres1;
    }

    public function get_codFeligres2() {
        return $this->_codFeligres2;
    }

    public function get_codSacramento() {
        return $this->_codSacramento;
    }

    public function set_codFeligres1($_codFeligres1) {
        $this->_codFeligres1 = $_codFeligres1;
    }

    public function set_codFeligres2($_codFeligres2) {
        $this->_codFeligres2 = $_codFeligres2;
    }

    public function set_codSacramento($_codSacramento) {
        $this->_codSacramento = $_codSacramento;
    }






}
