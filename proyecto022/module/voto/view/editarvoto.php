<?php
require_once "../../../config/loader.php";

use Module\Sacramento\Controller\SacramentoController;
use Module\Feligres\Controller\FeligresController;
use Vendor\Utility\Form\DropDown;

$objController = new FeligresController();
$records = $objController->getAssoc();
$records2 = $objController->getAssoc();

$objController1 = new SacramentoController();
$records1 = $objController1->getAssoc();
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
        <title>Voto</title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery.validate.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap-notify.js" type="text/javascript"></script>
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
                    <li class="breadcrumb-item">Voto</li>
                    <li class="breadcrumb-item active"> Votos</li>
                </ol>
            </nav>
        </header>
        <section class="container">
            <div>
                <div class="jumbotron">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Crear Voto</h3>
                        </div>
                        <?php
                        $mensaje = filter_input(INPUT_GET, "msg");

                        if ($mensaje == "233") {
                            ?>

                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Advetencia!</strong> repitio la persona en la seleccion para el sacramento
                            </div>
                            <?php
                        }
                        ?>
                        <div class="card-body">
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>&times;</samp></a> 
                                Diligencia este formulario para crear un Voto

                            </div>                

                            <form id="myform" name="myform" method="post" action="../controller/votopostcontroller.php">

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="sel1">Sacramento</label>
                                    <div class="col-lg-5">
                                        <?php
                                        echo DropDown::showAll("sacramento", $records1, "form-control", "Seleccione", "", "");
                                        ?>
                                    </div> </div>   
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="sel1">Feligres 1</label>
                                    <div class="col-lg-5">
                                        <?php
                                        echo DropDown::showAll("feli1", $records, "form-control", "Seleccione", "", "");
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="sel1">Feligres 2</label>
                                    <div class="col-lg-5">
                                        <?php
                                        echo DropDown::showAll("feli", $records2, "form-control", "Seleccione", "", "");
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label "></label>
                                    <div class="col-lg-5">
                                        <button type="Submit" class="btn btn-primary">Crear Rutina</button>

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