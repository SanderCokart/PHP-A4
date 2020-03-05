<?php

namespace views;

use mvc\View;

class HomeView extends View
{
    public function getHTML()
    {
        return "<h1>Home</h1>";
        $this->controller->redirect();
    }
}