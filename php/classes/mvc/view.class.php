<?php

namespace mvc;

/**
 * Class View
 * @package mvc
 * contains the default functions implemented on every view
 */
abstract class View implements \mvc\interfaces\View
{
    protected $controller;
    protected $model;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }
}