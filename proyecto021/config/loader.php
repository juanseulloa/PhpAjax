<?php
ini_set('display_errors','1');
error_reporting(E_ALL | E_STRICT);
function autoLoader($name) {
    $configPhat = "config";
    $currentPhat = str_replace("\\", "/", __DIR__);
    $projectPath = str_replace($configPhat, "", $currentPhat);
    $myClass = strtolower($name);
    $classPhat = str_replace("\\", "/", $myClass);
    $finalPhat = $projectPath . "" . $classPhat . ".php";
    require ($finalPhat);
}

spl_autoload_register("autoLoader");
?>

