<?php 

require_once "./core/config.php";
require_once "./controllers/ViewsController.php";

$template = new ViewsController();
$template->get_template_controller();