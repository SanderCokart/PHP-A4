<?php
define('DEFAULT_ROUTE', 'home');

$routes = array(
    'home' => array(
        'view' => 'HomeView',
        'controller' => 'HomeController',
    ),
    'form' => array(
        'view' => 'FormView',
        'controller' => 'FormController',
    ),
    'test' => array(
        'view' => 'TestView',
        'controller' => 'TestController',
    ),
    'resultaat' => array(
        'view' => 'ResultaatView',
        'controller' => 'ResultaatController',
        'model' => 'ResultaatModel',
    ),
);