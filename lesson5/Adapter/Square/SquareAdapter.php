<?php


class SquareAdapter implements ISquare
{
    private $square;

    public function __construct(SquareAdaptee $square)
    {
        $this->square = $square;
    }

    public function square(int $width)
    {
        $diagonal = $width * sqrt(2);
        $area = $this->square->getSquareArea($diagonal);

        return $area;
    }
}