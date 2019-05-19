<!DOCTYPE html>
<?php
require_once '../../../config/loader.php';

use Module\Gym\Controller\SeguimientoController;
use Vendor\Utility\Form\DropDown;
use Module\Menu\Controller\MenuSystem;

$objplanController = new SeguimientoController();
$info = $objplanController->getAssocSegumimiento();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/animate.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap-notify.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
         echo MenuSystem::show();
        ?>
        <header class="container">
            <p></p>
            <nav >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >Gym</li>
                    <li class="breadcrumb-item" >formulario</li>

                </ol>
            </nav>
            <section>
                <div>
                    <div class="jumbotron">
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <h3 class="mb-0">Plan Acondicionamiento</h3>
                            </div>
                            <div class="card-body">

                                <form id="formulario"  method="post" name="formulario" action="../controller/planacondicionamientopostcontroller.php">

                                    <div class="form-group row ">
                                        <label class="col-sm-2 control-label " for="rect">Nombre Plan Acondicionamiento: </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="nombre" name="nombre"  >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-2 control-label " for="rect">Tipo seguimiento: </label>
                                        <div class="col-sm-5">
                                            <!--<select class="form-control" name="seguimiento" id="seguimiento" >-->
                                            <?php
//                                                $opciones= DropDown::hacerOpciones($info);
//                                                echo $opciones;
                                            echo DropDown::showAll("seguimiento", $info, "form-control", "seleccione un dato", "", "");
                                            ?>
                                            <!--</select>-->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="mail">Biotipo</label>
                                        <div class="col-sm-5">
                                            <label class="radio-inline"><input type="radio" name="biotipo" id="biotipo" value="Ectomorfo" checked>Ectomorfo</label>
                                            <label class="radio-inline"><input type="radio" name="biotipo" id="biotipo" value="Endorfo">Endomorfo</label>
                                            <label class="radio-inline"><input type="radio" name="biotipo" id="biotipo" value="Mesomorfo">Mesomorfo</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="mail">Tipo Plan:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="tipoplan" name="tipoplan"  />
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label "></label>
                                        <div class="col-lg-5">
                                            <button type="Submit" class="btn btn-primary">¡Crear Registro!</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <script type="text/javascript">
            $(function () {
                $("#formulario").validate({

                    errorClass: "text-danger",
                    rules: {

                        nombre: {
                            required: true
                        },
                        tipoplan: {
                            required: true

                        }

                    },
                    messages: {

                        nombre: {
                            required: "ingrese el nombre del plan de acondicionamiento"
                        },
                        tipoplan: {
                            required: "ingrese el tipo de plan"
                        }



                    },
                    errorPlacement: function (error, element) {
                        error.insertAfter(element.parent());
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                        $(element).addClass("alert-danger").removeClass("alert-success");
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).addClass("is-valid").removeClass("is-invalid");
                        $(element).addClass("alert-success").removeClass("alert-danger");
                    },

                });
            });
        </script>
        <?php
        if (filter_input(INPUT_GET, "msg") == '136') {

            echo "
            <script>
            
                $.notify({
    
                    title: '<i class=\'fas fa-exclamation-triangle\'></i> <b>Espera! </b><br/>',
                    message: 'Tienes que introducir un nombre más pequeño.' 
                    
                },{
    
                    type: 'danger',
                        placement: {
                            from: 'top',
                            align: 'right'
                        },
                        
                    animate: {
                        enter: 'animated bounceInRight',
                        exit: 'animated bounceOutRight'
                    },
                    
                });
                                    
            </script>
                        
        ";
        }
        ?>


    </body>
</html>
