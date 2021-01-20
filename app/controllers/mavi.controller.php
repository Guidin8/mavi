<?php


include_once 'app/views/mavi.view.php';



class MaviController{
   
    private $view;
   

    function __construct() {
        $this->view = new MaviView();
        
    }

    function showHome(){
         
        $this->view->showHome();
    }
    function showInscInicial(){
         
        $this->view->showInscInicial();
    }
    function showTransferencia(){
         
        $this->view->showTransferencia();
    }
    function showPrendario(){
         
        $this->view->showPrendario();
    }
}