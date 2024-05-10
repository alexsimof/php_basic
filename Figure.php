<?php

abstract class Figure
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

    abstract public function area();

    abstract public function perimeter();

    public function getPerimeter(): int|float
    {
        return $this->perimeter();
    }

    public function getArea(): int|float
    {
        return $this->area();
    }

}
