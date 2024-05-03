<?php

class TwoText extends OneText
{
    public function my_print(): string
    {
        return strtoupper($this->text);
    }
}