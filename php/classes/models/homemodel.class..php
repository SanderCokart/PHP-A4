<?php

namespace controllers;

use mvc\Model;

class HomeModel extends Model
{
    public function redirect()
    {
        header("location:./form");
    }
}