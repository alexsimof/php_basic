<?php
function fibonacci (int $maxArg): Generator
{
    $a = 0;
    $b = 1;
    while ($a < $maxArg) {
        yield $a;
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}
$fibNumber = fibonacci( 100 );
foreach ($fibNumber as $number) {
    echo $number . "\n";
}
