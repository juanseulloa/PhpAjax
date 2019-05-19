
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
                    <li class="breadcrumb-item active"> Crear Feligres</li>
                </ol>
            </nav>
        </header>
        <section class="container">
            <div>
                <div class="jumbotron">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Crear Feligres</h3>
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
                                Diligencia este formulario para crear un Feligres
                            </div>

                            <form id="myform" name="myform" method="post" action="../controller/feligrespostcontroller.php">

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Nombres Feligres: </label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text"  id="nom" name="nom" placeholder="nombre" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Apellidos: </label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text"  id="ape" name="ape" placeholder="Apellidos" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="name">Fecha Nacimiento </label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="date"  id="fecha" name="fecha"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="mail">Genero</label>
                                    <div class="col-sm-5">
                                        <label class="radio-inline"><input type="radio" id="genero" name="genero"  value="2">Femenino</label>
                                        <label class="radio-inline"><input type="radio" id="genero" name="genero" value="1">Masculino</label>

                                    </div>
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
    </body>
</html>