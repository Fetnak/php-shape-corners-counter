<?php

require_once __DIR__ . '/functions/get-corners-count.php';
require_once __DIR__ . '/classes/shape-corners-counter.php';

use Classes\ShapeCornersCounter;

print(getCornersCount('square'));
print("\n");
print(getCornersCount('square', 'circle', 'triangle'));

print("\n\n\n");

$shapeCornersCounter = new ShapeCornersCounter([
    'square' => 4,
    'circle' => 0,
]);

print($shapeCornersCounter->getCornersCount('square'));
print("\n");
print($shapeCornersCounter->getCornersCount('square', 'circle', 'triangle'));
