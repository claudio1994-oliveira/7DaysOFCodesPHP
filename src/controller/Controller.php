<?php

namespace App\Controller;

use App\View\View;

class Controller
{

    public View $view;

    public function __construct()
    {
        $this->view = new View;
    }

    public function do_register()
    {
        return $this->view->render_view("register");
    }
    public function do_login()
    {
        return $this->view->render_view("login");
    }
    public function do_not_found()
    {
        return $this->view->render_view("not_found");
    }
}
