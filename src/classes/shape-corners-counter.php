<?php

namespace Classes;

require_once __DIR__ . '/shape.php';

use Classes\Shape;

class ShapeCornersCounter
{
    public const SHAPES = [
        'square' => 4,
        'circle' => 0,
    ];

    private array $shapes = [];

    public function __construct()
    {
        foreach (self::SHAPES as $shape => $cornersCount) {
            $this->shapes[$shape] = new Shape($shape, $cornersCount);
        }
    }

    private function getShape(string $name): Shape|null
    {
        return $this->shapes[$name] ?? null;
    }


    public function getCornersCount(string ...$shapeNames): string
    {
        $text = "";

        foreach ($shapeNames as $shapeName) {
            $shape = $this->getShape($shapeName);
            if ($shape) {
                $text .= sprintf("%s - %d\n", $shape->getName(), $shape->getCornersCount());
            } else {
                $text .= sprintf("%s - not defined\n", $shapeName);
            }
        }

        return $text;
    }
}
