<?php
require_once '../../../config/loader.php';

use Module\Cine\Controller\GeneroController;
use Vendor\Utility\Form\DropDown;

$objPeriodo = new GeneroController();
$info = $objPeriodo->getAssocPeriodo();
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
        require_once '../../../public/menu.php';
        ?>
        <header class="container">
            <p></p>
            <nav >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >Cine</li>
                    <li class="breadcrumb-item" >Crear pelicula</li>

                </ol>
            </nav>
            <section>
                <div>
                    <div class="jumbotron">
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <h3 class="mb-0">Pelicula</h3>
                            </div>

                            <div class="card-body">

                                <form id="formulario"  method="post" name="formulario" action="../controller/peliculapostcontroller.php">


                                    <div class="form-group row ">
                                        <label class="col-sm-2 control-label " for="rect">Nombre Pelicula: </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="nom" name="nom"  >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="mail">Fecha Pelicula</label>
                                        <div class="col-sm-5">
                                            <label class="checkbox-inline">
                                                <input type="date" class="form-control" id="fec" name="fec"  />
                                            </label>

                                        </div>

                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-2 control-label " for="rect">Genero Pelicula: </label>
                                        <div class="col-sm-5">

                                            <?php
                                            echo DropDown::showAll("pelicula", $info, "form-control", "seleccione un dato", "", "");
                                            ?>

                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label "></label>
                                        <div class="col-lg-5">
                                            <button type="Submit" class="btn btn-primary">¡Crear Pelicula</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>






        </header>


    </body>
</html>
