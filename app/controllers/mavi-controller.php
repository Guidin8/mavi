<?php


include_once 'app/views/mavi.view.php';



class MaviController{
   
    private $model;
    private $view;
    private $data;

    function __construct(){
        $this->view=new MaviView();
        $this->data = file_get_contents('php://input');
    }

    /**Funcion que convierte la variable data en JSON */
   function getData($params = null){
        return json_decode($this->data);
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