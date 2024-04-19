<?php
function creatArray(int $length = 10, int $min = 1, int $max = 15): array
{
    $array = [];
    for($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}
//var_dump(creatArray(10, 1, 20));

$myArray = creatArray(10, 1, 20);
sort($myArray);
$minArr = $myArray[0];
$maxArr = end($myArray);

echo $minArr . PHP_EOL;
echo $maxArr . PHP_EOL;
var_dump( $myArray) . PHP_EOL;