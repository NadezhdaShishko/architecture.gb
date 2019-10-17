<?php
//namespace AbstractFactory\Graphic;

//use AbstractFactory\Element\Button\Button;
//use AbstractFactory\Element\Checkbox\Checkbox;

class MacGraphic extends Graphic
{
    public function createButton(): Button
    {
        return MacButton();
    }

    public function createCheckbox():Checkbox
    {
        return MacCheckbox();
    }
}