<?php

namespace mvc;

class Router
{
    private $route;
    private $view;
    private $controller;
    private $model;

    public function __construct()
    {
        //get the file containing arrays of pages with controllers, views and models
        require_once(LOCAL_ROOT . "php/routes.php");

        //if the route is set
        if (isset($_GET['route'])) {

            //converts string of the route into an array of route destinations
            $this->route = explode("/", $_GET['route']);
        }

        /**
         * route gets set to either a route from the array $this->route or DEFAULT_ROUTE('home')
         */
        $route = isset($routes[$this->getRoute()]) ? $this->getRoute() : DEFAULT_ROUTE;

        //sets the controller, view and model associated with the route
        $controller = isset($routes[$route]['controller']) ? "\\controllers\\" . $routes[$route]['controller'] : null;
        $view = isset($routes[$route]['view']) ? "\\views\\" . $routes[$route]['view'] : null;
        $model = isset($routes[$route]['model']) ? "\\models\\" . $routes[$route]['model'] : null;

        //if mvc is set assign them to $this otherwise make it null
        $this->model =
            isset($model) ? new $model() : null;
        $this->controller =
            isset($controller) ? new $controller(
                isset($this->model) ? $this->model : null) : null;
        $this->view =
            isset($view) ? new $view(
                isset($this->controller) ? $this->controller : null,
                isset($this->model) ? $this->model : null
            ) : null;
    }

    /**
     * if the explode succeeded and there is an array to be used containing routes
     * @return mixed|string
     * else @return 'home'
     */
    private function getRoute()
    {
        return isset($this->route) > 0 ? $this->route[0] : DEFAULT_ROUTE;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }
}