<?php

namespace views;

use controllers\ResultaatController;
use mvc\View;

class ResultaatView extends View
{
    public function getHTML()
    {
        $data = $this->model->getData();
        return $data;
    }
}