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
$Router->add('/guigui', ['controller' => 'appC@homePage']);
$Router->add('/guigui/temperatureext', ['controller' => 'appC@temperatureExtPage']);
$Router->add('/guigui/temperatureint', ['controller' => 'appC@temperatureIntPage']);
$Router->add('/guigui/humidityext', ['controller' => 'appC@humidityExtPage']);
$Router->add('/guigui/humidityint', ['controller' => 'appC@humidityIntPage']);


// Initialize Controller
$Router->initialize();


?>