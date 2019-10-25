<?php


class TextReceiver
{
    public function copy(){
        //бизнес-логика
        echo "Копируем текст".PHP_EOL;
    }

    public function cut(){
        //бизнес-логика
        echo "Вырезаем текст".PHP_EOL;
    }

//    public $text = '';

    public function paste() {
        //бизнес-логика
        echo "Вставляем текст".PHP_EOL;
    }

    public function undo() {
        //бизнес-логика
        echo "Отменяем действие".PHP_EOL;
    }
}