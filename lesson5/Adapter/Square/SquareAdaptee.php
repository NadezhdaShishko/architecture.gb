<?php


class SquareAdaptee
{
    public function getSquareArea(int $diagonal)
    {
        $area = pow($diagonal, 2);

        return $area;
    }
}