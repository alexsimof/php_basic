<?php
function getArguments(string $arg, $arg1): void
{
    $argument = fgets($arg1);
    file_put_contents($arg, $argument, FILE_APPEND);
}
getArguments('test.txt', STDIN);

function readArguments(): string
{
   $line =  file('test.txt');
   $lastLine = $line[count($line)-1];
   return $lastLine;
}
echo readArguments();