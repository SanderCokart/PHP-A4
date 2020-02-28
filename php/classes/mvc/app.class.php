<?php

namespace mvc;

use controllers\TestController;
use Exception;
use views\testView;

class App
{
    private $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function __toString()
    {
        try {
            return $this->router->getView()->getHTML();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}
