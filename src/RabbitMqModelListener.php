<?php

namespace CodeByKyle\LaravelRabbitMqModelListener;

use Bschmitt\Amqp\Consumer;

class RabbitMqModelListener
{
    protected $consumer;

    public function __construct(array $config)
    {
        $this->listener = new Consumer($config);
    }
    
    public function consoleTest(){
        return "Hello!";
    }
}