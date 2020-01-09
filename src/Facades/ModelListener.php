<?php

namespace CodeByKyle\RabbitMqModelListener\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * Class RabbitMqModelListener
 * @package CodeByKyle\RabbitMqModelListener
 * @see CodeByKyle\RabbitMqModelListener\RabbitMqModelListener
 */
class ModelListener extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'RabbitMqModelListener';
    }
}