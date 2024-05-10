<?php

class Circle extends Figure
{

    public function area(): int|float
    {
        return $s = pi() * pow($this->radius, 2);
    }

    public function perimeter(): int|float
    {
        return $p = 2 * ($this->width + $this->height);
    }


}