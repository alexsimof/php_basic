<?php

class Circle extends Figure
{
    protected int|float $radius;

    public function __construct(int|float $radius)
    {
        $this->setRadius($radius);
    }

    public function setRadius($radius): int|float
    {
        return $radius > 0 ? $this->radius = $radius : 0;
    }

    public function area(): int|float
    {
        return $s = pi() * pow($this->radius, 2);
    }

    public function perimeter(): int|float
    {
        return $p = 2 * ($this->width + $this->height);
    }

    public function getArea(): int|float
    {
        return $this->area();
    }
}