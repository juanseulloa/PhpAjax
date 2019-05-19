<?php
require_once '../../../config/loader.php';

use Module\Feligres\Controller\FeligresController;
use Module\Feligres\Entity\Feligres;

$codigon = filter_input(INPUT_GET, "cod");
$key = filter_input(INPUT_GET, "key");
$verificarcodigo = md5($codigon);

$feligres = new Feligres();
$feligres->set_codfeligres($codigon);

$objFeligresController = new FeligresController();
$registro = $objFeligresController->getOne($feligres);
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
        <title>Ejercicio</title>
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
            require_once "../../../config/loader.php";
            require_once "../../../public/menu.php";
            ?>
            <p></p>
            <nav class=" container">
                <ol class="breadcrumb " >
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Feligres</li>
                    <li class="breadcrumb-item active"> Edirtar Feligres</li>
                </ol>
            </nav>
           
        </header>
         
        <section class="container">
            <?php
            if ($verificarcodigo == $key) {
            ?> 
            <div>
                <div class="jumbotron">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Editar Feligres</h3>
                        </div>
                        <?php
                        $mensaje = filter_input(INPUT_GET, "msg");

                        if ($mensaje == "233") {
                            ?>

                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Advetencia!</strong> excedió la cantidad de caracteres
                            </div>
                            <?php
                        }
                        ?>
                        <div class="card-body">
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>&times;</samp></a> 
                                 Formulario para Modificar un Feligres
                            </div>

                            <form id="myform" name="myform" method="post" action="../controller/feligreseditarpostcontroller.php">

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Nombres Feligres: </label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text"  id="nom" name="nom" placeholder="nombre" value="<?php echo $registro["nombres"]; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Apellidos: </label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text"  id="ape" name="ape" placeholder="Apellidos" value="<?php echo $registro["apellidos"]; ?>"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Fecha Nacimiento </label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="date"  id="fecha" name="fecha" value="<?php echo $registro["fechanacimiento"]; ?>"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="mail">Genero</label>
                                     <?php
                                                if ($registro["genero"] == 2) {
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

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label "></label>
                                    <div class="col-lg-5">
                                        <button type="Submit" class="btn btn-primary">Crear Feligres</button>

                                    </div>
                                </div>
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
    </body>
</html>