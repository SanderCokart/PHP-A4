<?php

namespace views;

use mvc\View;


/**
 * Class HomeView
 * @package views
 */
class HomeView extends View
{
    /**
     * @return string
     */
    public function getHTML()
    {
        return "<h1>Home</h1>";
        $this->controller->redirect();
    }
}