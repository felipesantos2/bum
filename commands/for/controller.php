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

    // $boilerplate = file_get_contents(__DIR__ . '/controller-boilerplate.txt');

    // $controllerContent = str_replace('{% $name %}', $file,  $boilerplate);

    // file_put_contents($controllerPath . '/' . $file . '.php', $controllerContent);
}
