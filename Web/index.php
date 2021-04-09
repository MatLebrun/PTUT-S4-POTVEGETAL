<?php
/**
 *  @title : index.php
 * 
 *  @brief : Routing table & start page
 */
 

// require Core files
require_once('./Core/Model.php');
require_once('./Core/View.php');


// Router
require_once('./Core/Router.php');
$Router = new Router;


/**
 *  Add your routes here
 */

/**
 * How to add a route :
 * $router->add(URL, ['controller' => ControllerPage@MethodName]);
 */
$Router->add('', ['controller' => 'appC@homePage']);
$Router->add('/temperature', ['controller' => 'appC@temperaturePage']);
$Router->add('/humidity', ['controller' => 'appC@humidityPage']);


// Initialize Controller
$Router->initialize();


?>