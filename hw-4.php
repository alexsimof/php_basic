<?php
// -1
function areaCircle(int $radius)
{
    $area = M_PI * pow($radius, 2);
    return $area;
}
var_dump(areaCircle(5)) . PHP_EOL;

// -2
function degreeReturn(int $number, int $power)
{
    $result = pow($number, $power);
    return $result;
}
echo degreeReturn(2, 2) . PHP_EOL;


// -3
function degreeModify(int &$number, int $power)
{
    $number = pow($number, $power);
    return $number;
}
$number = 3;
$power = 3;
echo degreeModify($number, $power) . PHP_EOL;

