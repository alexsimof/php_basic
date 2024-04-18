<?php

$users = [2, 3, 26, 14, 25, 16, 5, 18, 9, 15, 5, 1, 8, 4];
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
    if ($user == 5) {
        $count++;
    }
}
echo $count . PHP_EOL;

//-----

foreach ($users as $user) {
    if ($user % 3 == 0) {
        echo $user . PHP_EOL;
    }
}