<?php


function getCornersCount(...$shapeNames)
{

    $shapes = [
        'square' => 4,
        'circle' => 0,
    ];

    $text = "";

    foreach ($shapeNames as $shapeName) {
        if (array_key_exists($shapeName, $shapes)) {
            $text .= sprintf("%s - %d\n", $shapeName, $shapes[$shapeName]);
        } else {
            $text .= sprintf("%s - not defined\n", $shapeName);
        }
    }

    return $text;
}
