<?php

namespace Classes;

class Shape {
    private $name;
    private $cornersCount;

    public function __construct($name, $cornersCount) {
        $this->name = $name;
        $this->cornersCount = $cornersCount;
    }

    public function getName() {
        return $this->name;
    }

    public function getCornersCount() {
        return $this->cornersCount;
    }
}
