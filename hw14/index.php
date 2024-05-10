<?php

require_once 'Figure.php';
require_once 'Rectangle.php';
require_once 'Circle.php';


$rectangle = new Rectangle(4, 6, 8);
$circle = new Rectangle(4, 6, 8);
echo $rectangle->getPerimeter() . PHP_EOL;
echo $circle->getArea() . PHP_EOL;