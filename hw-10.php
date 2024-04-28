<?php
function getArguments(): void
{
    $arg = fgets(STDIN);
    file_put_contents('test.txt', $arg, FILE_APPEND);
}
getArguments();

function readArguments(): string
{
   $line =  file_get_contents('test.txt');
   return $line;
}
echo readArguments();
