<?php
require_once "../../../config/loader.php";

use Module\Sacramento\Controller\SacramentoController;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sacramento</title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery.validate.js" type="text/javascript"></script>

    </head>
    <body >
        <header>
            <?php
            require_once "../../../public/menu.php";
            ?>
            <p></p>
            <nav class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Sacramento</li>
                    <li class="breadcrumb-item active"> Administrar Sacramentos</li>
                </ol>
            </nav>
        </header>
        <section class=" container">
            <?php
            $mensaje = filter_input(INPUT_GET, "msg");
            if ($mensaje == "133") {
                ?>

                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Excelente!</strong> se modifico el sacramento
                </div>
                <?php
            }
            ?>
            <div>

                <div class="jumbotron">
                    <h1 class="text-left">Sacramento</h1>
                    <hr/>
                    <?php
                    $objController = new SacramentoController();
                    $records = $objController->getAll();


                    if (empty($records)) {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>Advertencia</strong>
                            <br/>
                            No hay registros
                            <button type="button" class="close" data-dismiss="alert">
                                <span>X</span>
                            </button>
                        </div>
                        <?php
                    } else {
                        ?>
                        <table class="table table-bordered table-sm table-hover">
                            <thead>
                                <tr class="thead-dark">
                                    <th>Codigo Sacramento</th>
                                    <th>Nombre Sacramento</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>




                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xhtml = "";
                                foreach ($records as $key => $column) {
                                    $cantHijos = $column["cant"];
                                    $cifrado = md5($column["codsacramento"]);
                                    if ($cantHijos == 0) {
                                        $cantTxt = "<td ><a href=\"\" class=\"btn btn-outline-danger btn-sm\" data-target=\"#delete{$column["codsacramento"]}\" data-toggle=\"modal\" id=\"deleteu\" data-target=\"#deleteu\" data-toggle=\"modal\" id=\"deleteu\" ><i class=\"fa fa-trash\" style=\"color:danger;font-size:16px;\"></i></a>&nbsp;";
                                    } else {
                                        $cantTxt = "<td ><a class=\"btn btn-outline-secondary btn-sm disabled\"><i class=\"fa fa-trash\" style=\"color:secondary;font-size:16px;\"></i></a>&nbsp;";
                                    }


                                    $xhtml = "<tr class=\"table-light\">";
                                    $xhtml .= "<td width=\"8%\">{$column["codsacramento"]}</td>";
                                    $xhtml .= "<td width=\"90%\">{$column["nombresacramento"]}</td>";
                                    $xhtml .= $cantTxt;
                                    $xhtml .= "
                                <div class=\"modal fade\" id=\"delete{$column["codsacramento"]}\" aria-labelledby=\"title\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" >
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"title\">Advertencia</h5>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body\">
                                                ¿Estas seguro de eliminar el sacramento {$column["nombresacramento"]}?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                                                <a  class=\"btn btn-primary text-white\" href=\"../controller/sacramentoeliminarpostcontroller.php?cod={$column["codsacramento"]}&key=$cifrado\" class=\"btn btn-primary\">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                                    $xhtml .= "<td><a class=\"btn btn-outline-info btn-sm\" href=\"./editarsacramento.php?cod={$column["codsacramento"]}&key=$cifrado\"><i class=\"fa fa-edit\" style=\"color:info;font-size:16px;\"></i></a></td>";


                                    $xhtml . "</tr>";
                                    echo $xhtml;
                                }
                                ?>

                            </tbody>
                        </table>
                        <?php
                    }
                    ?>
                </div> 
            </div>
        </section>


    </body>
</html>