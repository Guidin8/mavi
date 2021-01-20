<?php
    /* Incluyo la libreria para el ruteo */
    include_once 'lib/Router.php';
    /* Incluyo el controlador de profesiones y comemtarios*/
    include_once 'app/api/api-profession.controller.php';
    include_once 'app/api/api-comments.controller.php';
    include_once 'app/api/api-employees.controller.php';

    /* creo el ruteo */
    $router = new Router();

    /* Creando la tabla de ruteo */
    
    $router->addRoute('profesion', 'GET', 'ApiProfessionController' , 'getAll');
    $router->addRoute('profesion/:ID','GET', 'ApiProfessionController', 'getselected');
    $router->addRoute('profesion/valoracion/:ID','GET', 'ApiProfessionController', 'getselected');
    $router->addRoute('profesion/:ID', 'DELETE', 'ApiProfessionController' , 'delete');
    $router->addRoute('profesion', 'POST', 'ApiProfessionController', 'add'); 
    $router->addRoute('profesion/:ID', 'PUT', 'ApiProfessionController', 'update');
   

    /* rutea -> obteniendo el RECURSO y el METODO por el que me llamaron */
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
