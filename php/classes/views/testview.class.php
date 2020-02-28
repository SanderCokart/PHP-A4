<?php

namespace views;

class TestView extends \mvc\View
{
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