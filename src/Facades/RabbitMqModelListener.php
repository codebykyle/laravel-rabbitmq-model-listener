<?php

namespace CodeByKyle\Facades\LaravelRabbitMqModelListener;

use Illuminate\Support\Facades\Facade;


/**
 * Class RabbitMqModelListener
 * @package CodeByKyle\LaravelRabbitMqModelListener
 * @see CodeByKyle\LaravelRabbitMqModelListener\RabbitMqModelListener
 */
class RabbitMqModelListener extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'RabbitMqModelListener';
    }
}