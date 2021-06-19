<?php
    /* Incluyo la libreria para el ruteo */
    include_once 'lib/Router.php';
    /* Incluyo el controlador de profesiones y comemtarios*/
    include_once 'app/api/mavi-controller.php';
   

    /* creo el ruteo */
    $router = new Router();

    /* Creando la tabla de ruteo */
    
    $router->addRoute('aranceles', 'GET', 'MaviController' , 'getAll');

   

    /* rutea -> obteniendo el RECURSO y el METODO por el que me llamaron */
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
