<?php
require_once '../../../config/loader.php';

use Module\Gym\Controller\PersonaController;
use Module\Menu\Controller\MenuSystem;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        echo MenuSystem::show();
        ?>
        <section class="container">
            <p></p>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >Gym</li>
                    <li class="breadcrumb-item" >Administrar Personas</li>

                </ol>
            </nav>  
            <p></p>
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-4 text-center"> Administrar Personas </h1>
                    <?php
                    $objController = new PersonaController();
                    $records = $objController->getAllPersona();

                    if (empty($records)) {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>Advertencia</strong> <br/>
                            dady, no hay nada, no encotre nada.
                            <button type="button"m class="close" data-dismiss="alert">
                                <span>X</span>
                            </button>
                        </div>

                        <?php
                    } else {
                        ?>
                        <table class="table table-striped table-sm table-hover ">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="18%">Documento</th>
                                    <th width="18%">Nombre</th>
                                    <th width="18%">Apellidos</th>
                                    <th width="18%">Genero</th>
                                    <th width="18%">Fecha Nacimiento</th>
                                    <th width="4%">&nbsp;</th>
                                    <th width="4%">&nbsp;</th>
                                </tr>

                            </thead>
                            <tbody class="table-light">
                            
                                <?php
                                $xhtml = "";
                                foreach ($records as $key => $columna) {
                                    $cantidadhijos=$columna["cantidadhijos"];
                                    $hijostxt="<i class=\"fa fa-trash\" style=\"color: #cccccc \"></i>";
                                     $cifrado= md5($columna["idpersona"]);
                                    if ($cantidadhijos!=0) {
                                        $hijostxt ="<a href=\"../../../module/gym/controller/personaeliminarpostcontroller.php?codigo={$columna["idpersona"]}&key={$cifrado}\"><i class=\"fa fa-trash\" style=\"color: #ff3333 \"></i></a>";
                                    }
                                   
                                    $xhtml .= "<tr>";
                                    $xhtml .= "<td>{$columna["documento"]}</td>";
                                    $xhtml .= "<td>{$columna["nombre"]}</td>";
                                    $xhtml .= "<td>{$columna["apellidos"]}</td>";
                                    $xhtml .= "<td>{$columna["genero"]}</td>";
                                    $xhtml .= "<td>{$columna["fechanacimiento"]}</td>";
                                    $xhtml .="<td>$hijostxt</td>";
                                    $xhtml .="<td><a href=\"personaseditar.php?codigo={$columna["idpersona"]}&key={$cifrado}\"><i class=\"fa fa-edit\" style=\"color: #99ff99 \"></i></a></td>";

                                    $xhtml .= "</tr>";
                                }
                                echo $xhtml;
                                ?>
                            </tbody>


                            <?php
                        }
                        ?>



                </div>
            </div>
        </section>
    </body>
</html>
