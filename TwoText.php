<?php

class TwoText extends Text
{
    public function print(string $text): string
    {
        return $text = strtoupper($text);
    }
}