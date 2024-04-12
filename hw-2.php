<?php
echo "Hello world! \n";

echo "Hello! What is your name? \n";
$name = trim(fgets(STDIN));
echo "$name how are you? \n";
$norm = trim(fgets(STDIN));
echo "$name enter any number.. \n";
$numb1 = intval(trim(fgets(STDIN)));
echo "one more number.. \n";
$numb2 = intval(trim(fgets(STDIN)));
echo "one more thing.. \n";
$numb3 = intval(trim(fgets(STDIN)));
echo "Thank you! \n";
echo "$name, давай складемо ці числа.. \n";
echo "$numb1 + $numb2 + $numb3 \n";

$sum = $numb1 + $numb2 + $numb3 . PHP_EOL;
echo "равно $sum \n";
echo "а тепер $name давай знайдемо середнє арифметичне \n";
echo "($numb1 + $numb2 + $numb3) / 3 - це наша формула \n";

$arf = ($numb1 + $numb2 + $numb3) / 3 . PHP_EOL;
echo "равно $arf \n";



