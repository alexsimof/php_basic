<?php
function summa(int $number1, int $number2, Closure $noname = null ): int
{
    $result = $number1 * $number2;
    if ($noname !== null) {
        $noname($result);
    }
    return $result;
};
$noname = function ($value) {
    echo $value;
};

 echo summa(5,2,) . PHP_EOL;
 summa(5,2, $noname) . PHP_EOL;