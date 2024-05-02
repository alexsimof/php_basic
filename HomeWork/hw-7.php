<?php
function newArray(int $length = 15, int $min = 1, int $max = 15): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

$users = newArray( 15, 1, 20);
var_dump($users);

$result = 0;
foreach ($users as $user) {
    $result += $user;
}
echo $result . PHP_EOL;

//----

$post = 1;
foreach ($users as $user) {
    $post *= $user;
}
echo $post . PHP_EOL;

//----

$count = 0;
foreach ($users as $user) {
    if ($user === 5) {
        $count++;
    }
}
echo $count . PHP_EOL;

//-----

foreach ($users as $user) {
    if ($user % 3 === 0) {
        echo $user . PHP_EOL;
    }
}