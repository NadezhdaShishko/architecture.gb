<?php

namespace factory;

use components\button\Button;
use components\label\Label;
use components\modalWindow\ModalWindow;

abstract class GuiFactory
{
    abstract public function createButton(): Button;
    abstract public function createModalForm(): ModalWindow;
    abstract public function createLabel(): Label;
}