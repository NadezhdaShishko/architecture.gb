<?php

namespace factory;

use components\button\Button;
use components\button\MacButton;
use components\label\Label;
use components\label\MacLabel;
use components\modalWindow\MacModalWindow;
use components\modalWindow\ModalWindow;

class MacGuiFactory extends GuiFactory
{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createModalForm(): ModalWindow
    {
        return new MacModalWindow();
    }

    public function createLabel(): Label
    {
        return new MacLabel();
    }
}