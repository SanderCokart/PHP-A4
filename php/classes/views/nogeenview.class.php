<?php

namespace views;

use mvc\View;

/**
 * Class NogEenView
 * @package views
 */
class NogEenView extends View
{
    /**
     * @return mixed
     */
    public function getHTML()
    {
       return $this->model->getData();
    }
}