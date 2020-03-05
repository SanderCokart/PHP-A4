<?php

namespace controllers;

use mvc\Controller;

class HomeController extends Controller
{
    public function redirect()
    {
        header("location:./form");
    }
}