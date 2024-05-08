<?php

class TwoText extends OneText
{
    public function print(): string
    {
        return strtoupper($this->text);
    }
}