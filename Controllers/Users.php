<?php 

class Users extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        echo "Estas en el método por default de Users";
    }
}
