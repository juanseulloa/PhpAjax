<?php

namespace Vendor\Utility;

class Validar {

    public function __construct() {
        
    }

    public static function validarString($string, $min, $max) {
        $stringLengh = strlen($string);
        return ($stringLengh >= $min && $stringLengh <= $max);
    }

}
