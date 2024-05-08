<?php
require_once 'OneText.php';
require_once 'TwoText.php';


$text1 = new OneText();
$text2 = new TwoText();
echo $text1->print() . PHP_EOL;
echo $text2->print() . PHP_EOL;


