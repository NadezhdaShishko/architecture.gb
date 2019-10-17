<?php

namespace factory;

use components\button\BrowserButton;
use components\button\Button;
use components\label\BrowserLabel;
use components\label\Label;
use components\modalWindow\BrowserIExplorerModalWindow;
use components\modalWindow\BrowserWebkitModalWindow;
use components\modalWindow\ModalWindow;
use http\Exception\InvalidArgumentException;

class BrowserGuiFactory extends GuiFactory
{
    public const BROWSER_ENGINE_WEBKIT = 1;
    public const BROWSER_ENGINE_IEXPLORER = 2;
    private $modalWindow = null;

    public function __construct(int $browserEngine)
    {
        switch ($browserEngine) {
            case self::BROWSER_ENGINE_WEBKIT:
                $this->modalWindow = BrowserWebkitModalWindow::class;
                break;
            case self::BROWSER_ENGINE_IEXPLORER:
                $this->modalWindow = BrowserIExplorerModalWindow::class;
                break;
            default:
                throw new InvalidArgumentException('Unknown engine');
        }
    }

    public function createButton(): Button
    {
        return new BrowserButton();
    }

    public function createModalForm(): ModalWindow
    {
        return new $this->modalWindow();
    }

    public function createLabel(): Label
    {
        return new BrowserLabel();
    }
}