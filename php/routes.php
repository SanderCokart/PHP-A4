<?php
/**
 * array containing an array of the view, controller and model for each link named by their full class name.
 */
define('DEFAULT_ROUTE', 'home');
$routes = array(
    'home' => array(
        'view' => 'HomeView',
        'controller' => 'HomeController',
        'model' => 'HomeModel',
    ),
    'form' => array(
        'view' => 'FormView',
        'controller' => 'FormController',
    ),
    'test' => array(
        'view' => 'TestView',
        'controller' => 'TestController',
        'model' => 'TestModel',
    ),
    'resultaat' => array(
        'view' => 'ResultaatView',
        'controller' => 'ResultaatController',
        'model' => 'ResultaatModel',
    ),
    'nogeen' => array(
        'view' => 'NogEenView',
        'controller' => 'NogEenController',
        'model' => 'NogEenModel',
    ),
    'enkel' => array(
        'controller' => 'EnkelController',
    ),
);