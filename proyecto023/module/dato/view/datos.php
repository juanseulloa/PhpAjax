<?php
require_once "../../../config/loader.php";

use Module\Dato\Controller\DatoController;
use Vendor\Utility\Form\DropDown;

$objController = new DatoController();
$result = $objController->getAssoc();
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
        <title>Tipos Datos</title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery.validate.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap-notify.js" type="text/javascript"></script>
        <script src="dato/cargaAjax.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <?php
            require_once "../../../public/menu.php";
            ?>
            <p></p>
            <nav class=" container">
                <ol class="breadcrumb " >
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Tipo Datos</li>
                    <li class="breadcrumb-item active"> Datos</li>
                </ol>
            </nav>
        </header>
        <section class="container">
            <div>
                <div class="jumbotron">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Datos</h3>
                        </div>
                        <?php
                        $mensaje = filter_input(INPUT_GET, "msg");

                        if ($mensaje == "233") {
                            ?>

                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Advetencia!</strong> excedió o no cumple la cantidad de caracteres
                            </div>
                            <?php
                        }
                        ?>
                        <div class="card-body">
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>&times;</samp></a> 
                                Datos
                            </div>

                            <form id="myform" name="myform" method="post" action="#">

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="sel1">Datos</label>
                                    <div class="col-lg-5">
                                        <?php
                                        echo DropDown::showAll("datos", $result, "form-control", "Seleccione un tipo datos", "", "");
                                        ?>

                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label "></label>
                                    <div class="col-lg-5">
                                        <button type="Submit" id="ulloa" class=" btn2 btn btn-danger">Eliminar</button>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Nuevo Dato</label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text"  id="dato" name="dato" placeholder="ingrese un tipo de dato"/>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label "></label>
                                    <div class="col-lg-5">
                                        <button type="Submit" id="crear" name="crear" class="btn btn-primary">Grabar</button>
                                        <button type="Submit" id="update" name="update" class="btn btn-success">Actualizar</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>