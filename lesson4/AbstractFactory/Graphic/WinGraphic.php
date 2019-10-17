<?php
//namespace AbstractFactory\Graphic;

//use AbstractFactory\Element\Button\Button;
//use AbstractFactory\Element\Checkbox\Checkbox;

class WinGraphic extends Graphic
{
    public function createButton(): Button
    {
        return WinButton();
    }

    public function createCheckbox():Checkbox
    {
        return WinCheckbox();
    }
}