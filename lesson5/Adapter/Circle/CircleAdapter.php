<?php


class CircleAdapter implements ICircle
{
    private $circle;

    public function __construct(CircleAdaptee $circle)
    {
        $this->circle = $circle;
    }

    public function circle(int $circumference)
    {
        $diagonal = $circumference/M_PI;
        $area = $this->circle->getCircleArea($diagonal);

        return $area;
    }

}