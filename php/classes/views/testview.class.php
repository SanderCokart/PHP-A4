<?php

namespace views;

use mvc\View;

/**
 * Class TestView
 * @package views
 */
class TestView extends View
{
    /**
     * @return string
     */
    public function getHTML()
    {
        $klik = $this->controller->getGetData('klik');
        $output = '';
        $output .= "<h1>" . $klik++ . "</h1>";
        $output .= "<a href=\"?klik=$klik\">klik</a>";
        $output .= "<br>";
        return $output;
    }
}