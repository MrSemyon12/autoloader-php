<?php

spl_autoload_register(function ($class) {
    $base = __DIR__ . '/';
    $fullPath = $base . str_replace("\\", "/", $class) . '.php';
    require_once $fullPath;
});

use vehicle\Vehicle;
use vehicle\car\Car;
use vehicle\car\wheel\Wheel;

($vehicle = new Vehicle())->say();
($car = new Car())->say();
($wheel = new Wheel())->say();
