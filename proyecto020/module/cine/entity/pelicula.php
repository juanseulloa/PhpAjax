<?php
namespace Module\Cine\Entity;

class Pelicula {
    private $_idpelicula;
    private $_nombre;
    private $_fecha;   
    private $_codgenero;
    
    
    public function __construct() {
        
    }
    function get_idpelicula() {
        return $this->_idpelicula;
    }

    function get_nombre() {
        return $this->_nombre;
    }

    function get_fecha() {
        return $this->_fecha;
    }

    function get_codgenero() {
        return $this->_codgenero;
    }

    function set_idpelicula($_idpelicula) {
        $this->_idpelicula = $_idpelicula;
    }

    function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    function set_fecha($_fecha) {
        $this->_fecha = $_fecha;
    }

    function set_codgenero($_codgenero) {
        $this->_codgenero = $_codgenero;
    }





   

}