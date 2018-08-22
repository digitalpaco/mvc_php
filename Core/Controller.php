<?php 

class Controller
{
    public function __construct()
    {
        if ($_GET && isset($_GET["action"])) {
            $action = $_GET["action"];
            if (method_exists($this, $action)) {
                $this->action();
            } else {
                die("action no encontrado");
            }
            
        } else {
            if (method_exists($this, "index")) {
                $this->index();
            } else {
                die("metodo por default no encotrado");
            }
            
        }
        
    }
}
