<?php


abstract class Graphic
{
    abstract protected function createButton() : Button;
    abstract protected function createCheckbox() : Checkbox;
}