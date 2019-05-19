<?php
require_once '../../../config/loader.php';

use Vendor\Utility\Form\DropDown;

$hora = array();
for ($index = 1; $index <= 12; $index++) {
    if ($index < 10) {
        $hora[$index] = "0".$index;
    } else {
        $hora[$index] = $index;
    }
}

$minuto = array();
for ($index = 0; $index <= 59; $index++) {
    if ($index < 10) {
        $minuto[$index] = "0".$index;
    } else {
        $minuto[$index] = $index;
    }
}

$segundo = array();
for ($index = 0; $index <= 59; $index++) {
    if ($index < 10) {
        $segundo[$index] = "0".$index;
    } else {
        $segundo[$index] = $index;
    }
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../../public/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
        <link href="../../../public/css/jquery-ui.css" rel="stylesheet" type="text/css"/>

        <script src="../../../public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap.js" type="text/javascript"></script>
        <script src="../../../public/js/bootstrap-notify.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        require_once '../../../public/menu.php';
        ?>
        <header class=" container">
            <p></p>
            <nav >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >GYM</li>
                    <li class="breadcrumb-item" >Horarios</li>

                </ol>
            </nav>

            <div class="jumbotron">



                <h3 class="mb-0 text-left">Horario</h3>

                <div class="card-body">


                    <div class="form-group">
                        
                        <div class="row">
                            
                            <div class="col-md-2"></div> 
                            
                            <div class="col-md-2">
                                <div>
                                    <?php
                                    echo DropDown::showAll("horas", $hora, "form-control", "hora", "", "");
                                    ?>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div>
                                    <?php
                                    echo DropDown::showAll("horas", $minuto, "form-control", "minuto", "", "");
                                    ?>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div>
                                    <?php
                                    echo DropDown::showAll("horas", $segundo, "form-control", "segundo", "", "");
                                    ?>
                                </div>
                            </div>
                            
                            <div class="col-md-1">
                                <div>
                                    <label class="radio-inline"><input type="radio" name="hora" id="hora" value="am"> am </label>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="">
                                    <label class="radio-inline"><input type="radio" name="hora" id="hora" value="am"> pm </label>
                                </div>
                            </div>
                            
                            <div class="col-md-2"></div> 
                            
                        </div>

                    </div>







                </div>








        </header>



    </body>
</html>
