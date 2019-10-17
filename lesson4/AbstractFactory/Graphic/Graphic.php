<?php
//namespace AbstractFactory\Graphic;

//use AbstractFactory\Element\Button\Button;
//use AbstractFactory\Element\Checkbox\Checkbox;

abstract class Graphic
{
    public function startPaint()
    {
        $paintMethod = $this->createButton();
        echo "Начинаем отрисовку!".PHP_EOL;

        $paintMethod -> paint();
    }

    abstract protected function createButton() : Button;
//    abstract protected function createCheckbox() : Checkbox;
}