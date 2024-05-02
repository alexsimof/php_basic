<?php
function getArguments(string $path, mixed $data): void
{
    $stream = fgets($data);
    file_put_contents($path, $stream, FILE_APPEND);
}
getArguments('test.txt', STDIN);

function readArguments(): string
{
    $file_path = 'test.txt';

   if (!file_exists($file_path)) {
       return $file_path;
   }

   $line =  file($file_path);
   $lastLine = $line[count($line)-1];
   return $lastLine;
}
echo readArguments();