<?php

namespace models;

use mvc\Model;

/**
 * Class NogEenModel
 * @package models
 * dit is een model dat enkel de data op het scherm laat zien
 */
class NogEenModel extends Model
{
    private $data = "hier is wat data";

    public function getData()
    {
        return $this->data;
    }
}