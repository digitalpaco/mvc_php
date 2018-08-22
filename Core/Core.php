<?php 

require_once './Core/Config.php';
require_once './Core/Controller.php';
if ($_GET && $_GET['view']) {
    $controller = ucwords(strtolower($_GET['view']));
    if (file_exists("./Controllers/$controller.php")) {
        require_once "./Controllers/$controller.php";
    } else {
        die("Controlador no encontrado");
    }
    
} else {
    $controller = CONTROLLER_DEFAULT;
    if (file_exists("./Controllers/$controller.php")) {
        require_once "./Controllers/$controller.php";
    } else {
        die("Controlador por default no encontrado");
    }
    
}
$controller_class = new $controller();
