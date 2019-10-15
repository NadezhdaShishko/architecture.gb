<?php


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