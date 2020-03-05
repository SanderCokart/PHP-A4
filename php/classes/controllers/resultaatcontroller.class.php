<?php

namespace controllers;

use mvc\Controller;

class ResultaatController extends Controller
{
    public function __construct($model)
    {
        parent::__construct($model);
        $this->model->setInput(htmlspecialchars($_POST['input']));
    }
}