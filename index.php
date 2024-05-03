<?php
require_once 'Text.php';
require_once 'TwoText.php';


$text1 = new Text();
$text2 = new TwoText();
echo $text1->print('curent text'). PHP_EOL;
echo $text2->print("curent text"). PHP_EOL;


