<?php

namespace Module\Menu\Controller;

class MenuSystem {

    public static function show() {
        $xhtml = "<header class=\"container\">";
        $xhtml .= "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">";
        $xhtml .= "<a class=\"navbar-brand\" href=\"../../../public/index.php\">USTA TUNJA</a>";
        $xhtml .= "<button class=\"navbar-toggler \" type=\"button\" data-toggle=\"collapce\" data-target=\"#menuPrincipal\">";
        $xhtml .= "<span class=\"navbar-toggler-icon\"></span>";
        $xhtml .= "</button>";
        $xhtml .= "<div class = \"collapse navbar-collapse\" id=\"menuPrincipal\">";
        $xhtml .= "    <ul class=\"navbar-nav\">";
        $xhtml .= "   <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../../module/application/view/index.php\">inicio</a>
                </li>";


        $xhtml .= "<li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" >clases</a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"../../../module/application/view/rolver.php\">roles</a>    

                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"../../../module/application/view/personaver.php\">personas</a>


                    </div>
                </li>";
        $xhtml .= "<li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" >otros</a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"../../../module/others/view/index.php\">una</a>
                        <a class=\"dropdown-item\" href=\"#\">dos</a>


                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">tres</a>

                    </div>
                </li>";
        $xhtml .= "<li class=\" nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" >Gym</a>
                    <div class=\"dropdown-menu text-right\">
                     
                        <a class=\"dropdown-item\" href=\"../../../module/gym/view/unidadacademica.php\">Unida Academica</a>
                        <a class=\"dropdown-item \" href=\"../../../module/gym/view/formularioua.php\">formularioUA</a>
                        <a class=\"dropdown-item \" href=\"../../../module/gym/view/formularioplan.php\">formularioPLan</a>
                        <a class=\"dropdown-item \" href=\"../../../module/gym/view/planacondicionamiento.php\">Plan Acondicionamiento</a>
                    </div>
                <li class=\" nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" >Personas</a>
                    <div class=\"dropdown-menu text-right\">
                        <a class=\"dropdown-item\" href=\"../../../module/gym/view/index.php\">ver personas</a>
                        <a class=\"dropdown-item\" href=\"../../../module/gym/view/formulario.php \">formularioPersona</a>
                        <a class=\"dropdown-item\" href=\"../../../module/gym/view/personas_admin.php\"> Administrar Persona</a>
                    </div>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../../module/gym/view/horario.php\">horario</a>
                </li>";

        $xhtml .= "</li>";
        $xhtml .= "</ul>";
        $xhtml .= "</nav>";
        $xhtml .= "</header>";

        return $xhtml;
    }

}
