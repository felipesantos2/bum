<?php

function makeController()
{
    $controllerPath = __DIR__ . '/../app/controllers';

    $what = explode(':', $_SERVER['argv'][1])[1];

    $fileName = $_SERVER['argv'][2] ?? '';

    if ($what != 'controller') {
        return;
    }

    if (empty($fileName)) {
        return;
    }

    $file = ucfirst($fileName);

    touch($controllerPath . '/' . $file . '.php');
}
