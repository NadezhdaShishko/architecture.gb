<?php


class CircleAdaptee
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * pow($diagonal, 2))/4;

        return $area;
    }
}