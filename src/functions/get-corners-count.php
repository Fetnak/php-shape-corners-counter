<?php


function getCornersCount(...$shapeNames)
{

    $shapes = [
        'square' => 4,
        'circle' => 0,
    ];

    $text = "";

    foreach ($shapeNames as $shapeName) {
        if (isset($shapes[$shapeName])) {
            $text .= "$shapeName - {$shapes[$shapeName]}\n";
        } else {
            $text .= "$shapeName - not defined\n";
        }
    }

    return $text;
}
