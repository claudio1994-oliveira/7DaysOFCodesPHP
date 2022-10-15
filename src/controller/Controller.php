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
        if ($_POST) {
            crud_create($_POST);
            header('Location: http://localhost:4242/?page=login');
        }
        return $this->view->render_view("register");
    }
    public function do_login()
    {
        return $this->view->render_view("login");
    }
    public function do_not_found()
    {
        http_response_code(404);
        return $this->view->render_view("not_found");
    }
}
