<?php

namespace views;

use mvc\View;

class FormView extends View
{
    public function getHTML()
    {
        return '
            <form method="post" action="' . WEB_ROOT . 'resultaat">
            <label>
                Vul alsjeblieft iets in :)
                <input type="text" name="input">
            </label>
            <button type="submit" name="ok" value="alles goed">Submit</button>
            </form>
        ';
    }
}