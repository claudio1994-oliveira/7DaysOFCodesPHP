<?php

include __DIR__ . '/vendor/autoload.php';

use App\Controller\Controller;

//$page = ($_GET['page'] ?? 'login') . '.view';
$page = $_GET['page'];
$controller = new Controller();

if (!$page) {
    echo $controller->do_login();
    die();
}

switch ($page) {
    case "login":
        echo $controller->do_login();
        break;
    case "register":
        echo $controller->do_register();
        break;
    default:
        echo $controller->do_not_found();
}
