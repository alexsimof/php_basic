<?php

class Text
{
    private string $text = 'some text';

    public function print(string $text): string
    {
        return ucfirst($text);
    }
}