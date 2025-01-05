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

    $boilerplate = file_get_contents(__DIR__ . '/boilerplates/model-boilerplate.txt');

    $content = str_replace('{% $name %}', $file,  $boilerplate);

    file_put_contents($modelPath . '/' . $file . '.php', $content);
}
