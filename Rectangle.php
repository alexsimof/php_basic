<?php

class Rectangle extends Figure
{
    protected int|float $width;
    protected int|float $height;

    public function __construct(int|float $width, int|float $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function setWidth($width): int|float
    {
        return $width > 0 ? $this->width = $width : 0;
    }
    public function setHeight($height): int|float
    {
        return $height > 0 ? $this->height = $height : 0;
    }

    public function area(): int|float
    {
        return $s = pi() * pow($this->radius, 2);
    }

    public function perimeter(): int|float
    {
        return $p = 2 * ($this->width + $this->height);
    }

    public function getPerimeter(): int|float
    {
        return $this->perimeter();
    }

}