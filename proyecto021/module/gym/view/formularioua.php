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
        <script src="../../../public/js/jquery.validate.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        require_once '../../../config/loader.php';
         use Module\Menu\Controller\MenuSystem;
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
                    <li class="breadcrumb-item" >FormularioUA</li>

                </ol>
            </nav>
            <section>
                <div>
                    <div class="jumbotron">
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <h3 class="mb-0">Unidad Academica</h3>
                            </div>
                            <div class="card-body">

                                <form id="formulario" name="formulario" method="post" action="../controller/unidadacademicapostcontroller.php">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="name">Nombre Unidad Academica </label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="text"  id="nomua" name="nomua">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-2 control-label " for="rect">Tipo Unidad Academica: </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="tipua" name="tipua">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label "></label>
                                        <div class="col-lg-5">
                                            <button type="Submit"class="btn btn-primary " >¡Crear Registro!</button>
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
                        nomua: {
                            required: true,
                            minlength: 10

                        },
                        tipua: {
                            required: true
                        }

                    },
                    messages: {
                        nomua: {
                            required: "ingrese  el nombre de la unidad academica",
                            minlength: "minimo de caracteres 15"
                        },
                        tipua: {
                            required: "ingrese  el tipo de unidad academica"
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
  
    </body>
</html>
