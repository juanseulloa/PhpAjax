<?php
require_once '../../../config/loader.php';

use Module\Gym\Controller\UnidadAcademicaController;
use Module\Menu\Controller\MenuSystem;
?>
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
            <nav>
                <p></p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >Gym</li>
                    <li class="breadcrumb-item" >Unidad academica</li>

                </ol>
            </nav>
            <div class="jumbotron">
                <div class="container">
                    <?php
                    $objControllerUA = new UnidadAcademicaController();
                    $records = $objControllerUA->getAllUnidadAcademica();

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
                        <table class="table table-striped table-sm table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th> nombre unidad academica</th>
                                    <th> tipo unidad academica</th>

                                </tr>
                            </thead>
                            <tbody class="table-light">
                                <?php
                                $xhtmlUA = "";
                                foreach ($records as $key => $columna) {
                                    $xhtmlUA .= "<tr>";
                                    $xhtmlUA .= "<td>{$columna["nombreua"]}</td>";
                                    $xhtmlUA .= "<td>{$columna["tipoua"]}</td>";
                                    $xhtmlUA .= "</tr>";
                                }
                                echo $xhtmlUA;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </section>
    </body>
</html>
