<?php

namespace factory;

use components\button\Button;
use components\button\WindowsButton;
use components\label\Label;
use components\label\WindowsLabel;
use components\modalWindow\ModalWindow;
use components\modalWindow\WindowsModalWindow as WindowsModalForm;

class WindowsGuiFactory extends GuiFactory
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createModalForm(): ModalWindow
    {
        return new WindowsModalForm();
    }

    public function createLabel(): Label
    {
        return new WindowsLabel();
    }
}