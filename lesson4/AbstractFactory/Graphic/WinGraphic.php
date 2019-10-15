<?php


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