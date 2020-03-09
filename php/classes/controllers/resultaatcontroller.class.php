<?php

namespace controllers;

use mvc\Controller;

/**
 * Class ResultaatController
 * @package controllers
 */
class ResultaatController extends Controller
{
    public function __construct($model)
    {
        //executes constructor of the parent and makes the model accessible .
        parent::__construct($model);
        //uses the model attached to the controllers construct to access the model to set the input to $_POST
        $this->model->setInput(htmlspecialchars($_POST['input']));
    }
}