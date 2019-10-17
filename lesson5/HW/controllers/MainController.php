<?php

namespace controllers;

use factory\GuiFactory;

class MainController
{
    private $factory;

    public function __construct(GuiFactory $factory)
    {
        $this->factory = $factory;
    }

    public function actionWindow()
    {
        echo $this->factory->createModalForm()->render();
        echo $this->factory->createButton()->render();
    }

    public function actionClick()
    {
        echo $this->factory->createLabel()->render();
    }
}