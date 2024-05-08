<?php

class OneText
{
    protected string $text = 'some text';

    public function print(): string
    {
        return ucfirst($this->text);
    }
}