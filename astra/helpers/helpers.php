<?php

use App\Controllers\Controller;

function render($template, $data = [])
{
    static $controller;

    if (!$controller) {
        $controller = new Controller();
    }

    echo $controller->render($template, $data);
}
