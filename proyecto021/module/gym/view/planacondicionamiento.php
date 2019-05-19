<!DOCTYPE html>
<?php
require_once '../../../config/loader.php';

use Module\Gym\Controller\PlanAcondicionamientoController;
use Module\Menu\Controller\MenuSystem;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
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
        <section class="container">
            <p></p>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >Gym</li>
                    <li class="breadcrumb-item" >Plan Acondicionamiento</li>

                </ol>
            </nav>  
            <p></p>
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-4 text-center"> Plan Acondicionamiento </h1>
                    <?php
                    $objController = new PlanAcondicionamientoController();
                    $records = $objController->getAllPlanAcondicionamiento();

                    if (empty($records)) {
                        ?>
                    
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>Advertencia</strong> <br/>
                            dady, no hay nada, no encotre nada.
                            <button type="button"m class="close" data-dismiss="alert">
                                <span>X</span>
                            </button>
                        </div>

                        <?php
                    } else {
                        ?>
                        <table class="table table-striped table-sm table-hover ">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th>Nombre Plan</th>
                                    <th>Tipo Plan</th>
                                    <th>Biotipo</th>
                                    
                                </tr>

                            </thead>
                            <tbody class="table-light">
                                <?php
                                $xhtml = "";
                                foreach ($records as $key => $columna) {
                                    $xhtml .= "<tr>";
                                    $xhtml .= "<td>{$columna["nombre"]}</td>";
                                    $xhtml .= "<td>{$columna["tipoplan"]}</td>";
                                    $xhtml .= "<td>{$columna["biotipo"]}</td>";
                                   
                                    $xhtml .= "</tr>";
                                }
                                echo $xhtml;
                                ?>
                            </tbody>


                            <?php
                        }
                        ?>



                </div>
            </div>
        </section>
               <?php

    if (filter_input(INPUT_GET, "msg") == '139') {

        echo "
            <script>
            
                $.notify({
    
                    title: '<i class=\'fa fa-check \'></i> <b>Espera! </b><br/>',
                    message: 'se guardo su registro' 
                    
                },{
    
                    type: 'success',
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
