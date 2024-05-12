<?php

class Circle extends Figure
{
    protected int|float $width;
    protected int|float $height;
    protected int|float $radius;

    public function __construct(int|float $width, int|float $height, int|float $radius)
    {
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setRadius($radius);
    }

    public function setWidth($width): int|float
    {
        return $width > 0 ? $this->width = $width : 0;
    }
    public function setHeight($height): int|float
    {
        return $height > 0 ? $this->height = $height : 0;
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

    public function getPerimeter(): int|float
    {
        return $this->perimeter();
    }

    public function getArea(): int|float
    {
        return $this->area();
    }
}