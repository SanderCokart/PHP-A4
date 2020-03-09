<?php

namespace controllers;

use mvc\Controller;

/**
 * Class EnkelController
 * @package controllers
 */
class EnkelController extends Controller
{
    //upon loading root/enkel/ redirect the user to index.php
    public function __construct()
    {
        header("location:index.php");
    }
}