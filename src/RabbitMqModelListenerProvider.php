<?php

namespace CodeByKyle\RabbitMqModelListener;

class RabbitMqModelListenerProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->app->bind('RabbitMqModelListener', 'CodeByKyle\RabbitMqModelListener\RabbitMqModelListener');

        if (!class_exists('RabbitMqModelListener')) {
            class_alias('CodeByKyle\RabbitMqModelListener\Facades\RabbitMqModelListener', 'RabbitMqModelListener');
        }

        $this->publishes([
            __DIR__ . '/../config/rabbitmq-model-listener.php' => config_path('rabbitmq-model-listener.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton('CodeByKyle\RabbitMqModelListener\RabbitMqModelListener', function ($app) {
            return new RabbitMqModelListener(
                config('rabbitmq-model-listener')
            );
        });
    }

    public function provides()
    {
        return [
            'RabbitMqModelListener',
            'CodeByKyle\RabbitMqModelListener'
        ];
    }
}