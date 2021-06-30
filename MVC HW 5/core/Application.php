<?php


namespace MVC;


class Application implements RunnableInterface, ContainerInterface
{

    public function get()
    {
        echo 'Start interface method get '.PHP_EOL;
    }

    public function has()
    {
        echo 'Start interface method has '.PHP_EOL;
    }

    public function run()
    {
        echo 'Start interface method run '.PHP_EOL;
    }
}