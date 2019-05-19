<?php
require_once "../../../config/loader.php";

use Module\Planeta\Controller\PlanetaController;
use Vendor\Utility\Form\DropDown;

$objController = new PlanetaController();
$records = $objController->getAssoc();
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
        <title>Pais</title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery.validate.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap-notify.js" type="text/javascript"></script>
        <script src="pais/cargaAjax.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
<?php
require_once "../../../config/loader.php";
require_once "../../../public/menu.php";
?>
            <p></p>
            <nav class=" container">
                <ol class="breadcrumb " >
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Pais</li>
                    <li class="breadcrumb-item active"> Crear Pais</li>
                </ol>
            </nav>
        </header>
        <section class="container">
            <div>
                <div class="jumbotron">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Crear Pais</h3>
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
                                formulario para crear un pais
                            </div>

                            <form id="myform" name="myform" method="post" action="../controller/paispostcontroller.php">

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="sel1">Planeta</label>
                                    <div class="col-lg-5">
<?php
echo DropDown::showAll("planetica", $records, "form-control", "Seleccione", "", "");
?>
                                    </div> </div>
                                        <?php
                                        ?>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="sel1">Continente</label>
                                    <div class="col-lg-5">
                                <?php
                                echo DropDown::showAll("continent", [], "form-control", "Seleccione", "", "");
                                ?>
                                    </div> </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Nombre Pais </label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text"  id="pais" name="pais"  />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label "></label>
                                    <div class="col-lg-5">
                                        <button type="Submit" class="btn btn-primary">Grabar</button>

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