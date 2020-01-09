<?php

namespace CodeByKyle\RabbitMqModelListener;

use Bschmitt\Amqp\Consumer;
use Illuminate\Config\Repository;

class RabbitMqModelListener
{
    protected $consumer;

    public function __construct(array $config)
    {
        $this->listener = new Consumer(
            new Repository($config)
        );
    }

    public function test(){
        return "Hello!";
    }
}