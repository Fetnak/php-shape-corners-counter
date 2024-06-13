<?php

namespace Classes;

require_once __DIR__ . '/shape.php';

use Classes\Shape;

class ShapeCornersCounter
{
    private $shapes = [];

    public function __construct($shapes)
    {
        foreach ($shapes as $shape => $cornersCount) {
            $this->shapes[$shape] = new Shape($shape, $cornersCount);
        }
    }

    public function getShape($name)
    {
        return isset($this->shapes[$name]) ? $this->shapes[$name] : null;
    }


    public function getCornersCount(...$shapeNames)
    {
        $text = "";

        foreach ($shapeNames as $shapeName) {
            $shape = $this->getShape($shapeName);
            if ($shape) {
                $text .= "{$shape->getName()} - {$shape->getCornersCount()}\n";
            } else {
                $text .= "$shapeName - not defined\n";
            }
        }

        return $text;
    }
}
