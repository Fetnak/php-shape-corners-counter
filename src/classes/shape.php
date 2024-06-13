<?php

namespace Classes;

class Shape
{
    public function __construct(
        private string $name,
        private int $cornersCount
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCornersCount(): int
    {
        return $this->cornersCount;
    }
}
