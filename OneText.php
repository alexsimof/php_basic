<?php

class OneText
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }


    public function my_print(): string
    {
        return ucfirst($this->text);
    }
}