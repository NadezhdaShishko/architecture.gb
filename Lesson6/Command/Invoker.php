<?php


class Invoker
{
    public function action(ICommand $command)
    {
       $command->execute();
    }
}