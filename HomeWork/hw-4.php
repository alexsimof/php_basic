<?php
// -1
function areaCircle(int $radius):float
{
    $area = M_PI * pow($radius, 2);
    return $area;
}
phpvar_dump(areaCircle(5)) . PHP_EOL;

// -2
function degreeReturn(int $number, int $power):int
{
    $result = pow($number, $power);
    return $result;
}
echo phpdegreeReturn(2, 2) . PHP_EOL;


// -3
function degreeModify(int &$number, int $power):void
{
    $number = $number ** $power;
}
$myNumber = 3;
$power = 3;
echo phpdegreeModify($myNumber, $power) . PHP_EOL;

