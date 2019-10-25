<?php


class TextReceiver
{
    protected $start = ''; //начало редактирования
    protected $finish = ''; //конец редактирования

    public function copy($start, $finish){
        //бизнес-логика
        echo "Копируем текст";
    }

    public function cut($start, $finish){
        //бизнес-логика
        echo "Вырезаем текст";
    }

    public $text = '';

    public function paste($text) {
        //бизнес-логика
        echo "Вставляем текст";
    }

    public function undo() {
        //бизнес-логика
        echo "Отменяем действие";
    }


}