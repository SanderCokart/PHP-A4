<?php

namespace mvc;

use controllers\TestController;
use Exception;
use views\testView;

/**
 * Class App
 * @package mvc
 * initializes the app
 * @see Router;
 * makes use of router class to get its view and show it on the screen with a toString method.
 */
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
