<?php
require_once '../../../config/loader.php';

use Module\Gym\Controller\PersonaController;
use Module\Gym\Entity\Persona;
use Module\Menu\Controller\MenuSystem;

$codigon = filter_input(INPUT_GET, "codigo");
$key = filter_input(INPUT_GET, "key");
$verificarcodigo = md5($codigon);

$persona = new Persona();
$persona->set_idpersona($codigon);

$objPersonaController = new PersonaController();
$registro = $objPersonaController->getOnePersona($persona);
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
        <script src="../../../public/js/jquery.validate.js" type="text/javascript"></script>

    </head>
    <body>
        <?php
        MenuSystem::show();
        ?>
        <header class="container">
            <p></p>
            <nav >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >Gym</li>
                    <li class="breadcrumb-item" >Persona Editar</li>

                </ol>
            </nav>
            <?php
            if ($verificarcodigo == $key) {
            ?>          

            <section>
                <div>
                    <div class="jumbotron">
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <h3 class="mb-0"> Editar Usuario</h3>
                            </div>
                            <?php
                            $mensaje = filter_input(INPUT_GET, "msg");

                            if ($mensaje == "346") {
                            ?>

                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Advetencia!</strong> excedió la cantidad de caracteres
                            </div>
                            <?php
                            }
                            ?>




                            <div class="card-body">

                                <form id="formulario"  method="post" name="formulario" action="../controller/personapostcontrolleractaulizar.php">
                                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigon; ?>"/>
                                    <input type="hidden" id="hash" name="hash" value="<?php echo $key; ?>"/>
                                    

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="name">documento: </label>
                                        <div class="col-lg-5">

                                            <input class="form-control" type="text"  id="documento" name="documento" placeholder="documento" value="<?php echo $registro["documento"]; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-sm-2 control-label " for="rect">Nombre: </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $registro["nombre"]; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="mail">Apellido:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" value="<?php echo $registro["apellidos"]; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="mail">Genero</label>
                                        <div class="col-sm-5">
                                            <?php
                                                if ($registro["genero"] == "Femenino") {
                                            ?>
                                            <div class="col-sm-5">
                                            <label class="radio-inline"><input type="radio" id="genero" name="genero" checked value="femenino">Femenino</label>
                                            <label class = "radio-inline"><input type = "radio" id = "genero" name = "genero"  value = "Masculino">Masculino</label>
                                            </div>
                                            <?php
                                            
                                            }else{
                                                ?>
                                            
                                             <div class="col-sm-5">
                                            <label class="radio-inline"><input type="radio" id="genero" name="genero"  value="femenino">Femenino</label>
                                            <label class = "radio-inline"><input type = "radio" id = "genero" name = "genero" checked value = "Masculino">Masculino</label>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="mail">Fecha nacimiento</label>
                                        <div class="col-sm-5">
                                            <label class="checkbox-inline">
                                                <input type="date" class="form-control" id="fec" name="fec" value="<?php echo $registro["fechanacimiento"]; ?>"  />
                                            </label>

                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label "></label>
                                        <div class="col-lg-5">
                                            <button type="Submit" class="btn btn-primary">¡Modificar Registro!</button>
                                        </div>
                                    </div>
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            } else {
               
                ?>  
                <div class="jumbotron">
                    <div class="card-body card-outline-secondary">
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>Advertencia</strong> <br/>
                            te crees un jacker.
                            <button type="button"m class="close" data-dismiss="alert">
                                <span>X</span>
                            </button>
                        </div> 
                    </div>
                </div>


                <?php
            }
            ?>






        </header>
        <script type="text/javascript">
            $(function () {
                $("#formulario").validate({

                    errorClass: "text-danger",
                    rules: {
                        documento: {
                            required: true,
                            minlength: 10

                        },
                        nombre: {
                            required: true
                        },
                        apellido: {
                            required: true

                        },
                        gen: {
                            required: true

                        },
                        fec: {
                            required: true

                        }

                    },
                    messages: {
                        documento: {
                            required: "ingrese su documentoo",
                            minlength: "minimo de caracteres 10"
                        },
                        nombre: {
                            required: "ingrese su nombre"
                        },
                        apellido: {
                            required: "ingrese sus apellidos"
                        },
                        gen: {
                            required: "seleccione su genero"
                        },

                        fec: {
                            required: "ingrese la fecha nacimiento"
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
