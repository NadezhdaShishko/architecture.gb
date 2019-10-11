<?php

//Магические числа /Антипаттерны в коде
// Необходимо задать константы

class Weight_Product extends Product
{
    public function getFinalPrice($weight)
    {
        if($weight < 3) {
            return $this->price;
        }
        elseif($weight >= 3 and $weight < 5) {
            return $this->price * 0.3;
        }
        else {
            return $this->price * 0.5;
        }
    }
    public function sell($weight)
    {
        parent::$profit = parent::$profit + ($weight * $this->getFinalPrice($weight));
    }
}