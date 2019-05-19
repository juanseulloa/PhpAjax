<?php
require_once "../../../config/loader.php";

use Module\Pais\Controller\PaisController;
use Module\Planeta\Controller\PlanetaController;
use Module\Continente\Controller\ContinenteController;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>planeta</title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery.validate.js" type="text/javascript"></script>
        <script src="iglesia/cargaAjax.js" type="text/javascript"></script>
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
                    <li class="breadcrumb-item">Planeta</li>
                    <li class="breadcrumb-item active">Ver</li>
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
                <strong>Excelente!</strong> se ha agregado el pais
            </div>
            <?php
            }
            ?>
            <div>

                <div class="jumbotron">
                    <h1 class="text-left">Planeta</h1>
                    <hr/>

                    <?php
                    $objController = new PlanetaController();
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
                                <th>Planeta</th>
                                <th>Continente</th>
                                <th>Pais</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $xhtml = "";
                            foreach ($records as $key => $column) {


                            $xhtml = "<tr class=\"table-light\">";
                            $xhtml .= "<td width=\"8%\">{$column["nombreplaneta"]}</td>";
                            $xhtml .= "<td width=\"8%\">{$column["nombrecontinente"]}</td>";
                            $xhtml .= "<td width=\"8%\">{$column["nombrepais"]}</td>";


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