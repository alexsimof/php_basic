<?php
//declare(strict_types = 1);

$number = 5;
$string = '55';
$empty = '';
$bool = true;
$bool1 = false;
$null = null;

$res1 = $number == $string . PHP_EOL; // true
$res2 = $number === $string . PHP_EOL; // false
$res3 = intval($number) == intvaL($string) . PHP_EOL; // true
$res4 = intval($number) === intvaL($string) . PHP_EOL;  // false - тоже самое что и на строке 10, потомучто строгое равно проверяет по типам
$res5 = $string == $null . PHP_EOL; // false
$res55 = intval($string) == intval($null) . PHP_EOL; // false
$res6 = $string === $null . PHP_EOL; // false
$res7 = $string == $bool . PHP_EOL; // false
$res9 = $string === $bool . PHP_EOL; // false
$res10 = $string == $bool1 . PHP_EOL; // false
$res11 = $string === $bool1 . PHP_EOL; // false
$res12 = $string == $empty . PHP_EOL; // false
$res13 = $string === $empty . PHP_EOL; // false
$res14 = $number == $empty . PHP_EOL; // false
$res15 = $number === $empty . PHP_EOL; // false
$res16 = $number == $bool . PHP_EOL; // false
$res17 = $number === $bool . PHP_EOL; // false
$res18 = $number == $null . PHP_EOL; // false
$res19 = $number === $null . PHP_EOL; // false
$res20 = $empty == $bool . PHP_EOL; // false
$res21 = $empty === $bool . PHP_EOL; // false
$res22 = $empty == $bool1 . PHP_EOL; // false
$res23 = $empty === $bool . PHP_EOL; // false
$res24 = $empty == $null . PHP_EOL; // false
$res25 = $empty === $null . PHP_EOL; // false
$res26 = $bool == $bool . PHP_EOL; // true
$res27 = $bool === $bool . PHP_EOL; // вот тут не понятно, документация говорит true, а выводит false.. ?
$res28 = $bool1 == $bool1 . PHP_EOL; // вот тут не понятно, документация говорит true, а выводит false.. ?
$res29 = $bool1 === $bool1 . PHP_EOL; // вот тут не понятно, документация говорит true, а выводит false.. ?


//var_dump($res1);
//var_dump($res2);
//var_dump($res3);
//var_dump($res4);
//var_dump($res6);
//var_dump($res7);
//var_dump($res9);
//var_dump($res10);
//var_dump($res11);
//var_dump($res12);
//var_dump($res13);
//var_dump($res14);
//var_dump($res15);
//var_dump($res16);
//var_dump($res17);
//var_dump($res18);
//var_dump($res19);
//var_dump($res20);
//var_dump($res21);
//var_dump($res22);
//var_dump($res23);
//var_dump($res24);
//var_dump($res25);
//var_dump($res26);
//var_dump($res27);
//var_dump($res28);
//var_dump($res29);

//----

$value = 1;
$color = match ($value) {
    1 => "green",
    2 => "red",
    3 => "blue",
    4 => "brown",
    5 => "violet",
    6 => "black",
    default => "white",
};
var_dump($color);