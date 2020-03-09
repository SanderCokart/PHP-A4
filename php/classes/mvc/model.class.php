<?php

namespace mvc;

use function MongoDB\BSON\toJSON;

/**
 * Class Model
 * @package mvc
 * contains the default functions implemented on every model
 */
abstract class Model implements \mvc\interfaces\Model
{
    protected $input;

    public function getData()
    {
        return $this->input;
    }

    public function setInput($input)
    {
        $this->input = $input;
    }
}