<?php
$i = 1;
while ($i <= 10) {
    echo $i++ . PHP_EOL;
}


$n = 1;
$res = 1;
while ($n <= 5) {
    $res *= $n;
    $n++;
}
echo $res . PHP_EOL;

$i = 1;
while ($i <= 20 ) {
   if ($i % 2 == 0) {
       echo $i . PHP_EOL;
   }
   $i++;
}
