<?php

require_once __DIR__ . '/functions/get-corners-count.php';

print(getCornersCount('square'));

print("\n");

print(getCornersCount('square', 'circle', 'triangle'));
