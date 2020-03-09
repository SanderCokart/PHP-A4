<?php

namespace views;

use controllers\ResultaatController;
use mvc\View;

/**
 * Class ResultaatView
 * @package views
 */
class ResultaatView extends View
{
    /**
     * @return mixed
     */
    public function getHTML()
    {
        $data = $this->model->getData();
        return $data;
    }
}