<?php

function makeModel(): void
{
    $modelPath = __DIR__ . '/../app/models';

    $what = explode(':', $_SERVER['argv'][1])[1];

    $fileName = $_SERVER['argv'][2] ?? '';

    if ($what != 'model') {
        return;
    }

    if (empty($fileName)) {
        return;
    }
    $file = ucfirst($fileName);
    
    touch($modelPath . '/' . $file . '.php');
}
