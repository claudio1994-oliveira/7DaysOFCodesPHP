<?php

namespace App\View;

class View
{
    public function render_view(string $template)
    {

        $content =  file_get_contents(getcwd() . '\\view\\' . $template . '.view');

        return $content;
    }
}
