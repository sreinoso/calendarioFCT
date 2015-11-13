<?php

require_once "../model/model.php";
require_once "../view/view.php";
/**
 * Controller
 **/
class Controller {
    private $model;
    private $view;
    private $request;
    private $isGET;
    private $isPOST;
    private $document;

    function __construct() {
        $this->request = $_REQUEST;
        $this->isPOST=!empty($_POST);
        $this->isGET=!empty($_GET);
        $this->model = new Model();
        $this->view = new View();
        // code...
    }

    private loadHeader($title){
            
    }
}
new Controller();
?>
