<?php

namespace Module\Menu\Controller;

use Module\Menu\Repository\MenuRepository;

class MenuController {

    public function count() {
        $objRepository = new MenuRepository();
        //return $objRepository->count();
        $rows = $objRepository->count();
        $arregloAsosiativo = $this->arregloas($rows);
        return $arregloAsosiativo;
    }

    public function arregloas($rows) {
        $arreglito = array();

        foreach ($rows as $indice => $value) {
            $hijos = $value["cant"];
            $codgigoPadre = $value["codpadre"];
            $incremento = 0;
            if ($hijos > 0) {
                $codigo = $value["coditem"];
                $arregloHijo = array();
                foreach ($rows as $key => $values) {
                    $idpadre = $values["codpadre"];
                    $id = $values["coditem"];
                    if ($codigo == $idpadre) {
                        $arregloHijo[$incremento] = $values;
                        $incremento++;
                    }
                }
                $arreglito[$indice] = $value;
                $arreglito[$indice]["hijos"] = $arregloHijo;
            }
        }
        return $arreglito;
    }

}
