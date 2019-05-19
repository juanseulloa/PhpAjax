<?php

namespace Vendor\Utility\Form;

class DropDown {

//    public static function hacerOpciones($info) {
//        $xhtml = "<option value=''>seleccione opcion </option> \n";
//        foreach ($info as $key => $column) {
//            $xhtml .= "<option value='{$column["value"]}'>{$column["value"]} </option> \n";
//        }
//        return $xhtml;
//    }

    public static function showAll($id, $data, $style, $message,$idSelected, $event) {

        $xhtml = "<select class=\"{$style}\" name=\"{$id}\" id=\"{$id}\">\n";
        if (!empty($message)) {
            $xhtml .= "<option value=\"\">{$message} </option> \n";
        }

        foreach ($data as $key => $value) {
            if ($key==$idSelected) {
                $xhtml .="<option value=\"{$key}\" selected> {$value} </option> \n";
            }else{
                $xhtml .="<option value=\"{$key}\">{$value} </option> \n";
            }
        }
        $xhtml .= "</select>";
        
        return $xhtml;
    }

}
