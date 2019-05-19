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

    </head>
    <body>

        <?php
        require_once '../../../config/loader.php';

        use Module\Others\Entity\Rol;
        use Module\Menu\Controller\MenuSystem;

        echo MenuSystem::show();
        ?>
        <P></P>
        <header class="container">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../application/view/index.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item" >Clases</li>
                    <li class="breadcrumb-item" >Roles</li>

                </ol>
            </nav>
            <p></p>
            <div class="jumbotron">


                <div class="container text-center" >

                    <h1 class="display-4 text-center">
<?php
$objRol01 = new Rol();
$objRol01->set_codrol(667);
$objRol01->set_nameRol("administrador");
echo $objRol01->get_codrol();
echo "</br>";
echo $objRol01->get_nameRol();
?>
                    </h1>
                </div>
            </div>
        </header>
    </body>
</html>
