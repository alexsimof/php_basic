<?php
require_once 'OneText.php';
require_once 'TwoText.php';


$text1 = new OneText('some text');
$text2 = new TwoText('some text');
echo $text1->my_print() . PHP_EOL;
echo $text2->my_print() . PHP_EOL;


