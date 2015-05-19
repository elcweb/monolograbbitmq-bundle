<?php

namespace Elcweb\MonologRabbitMqBundle\Handler;

use PhpAmqpLib\Message\AMQPMessage;
use Monolog\Handler\AmqpHandler as BaseAmqpHandler;

class AmqpHandler extends BaseAmqpHandler
{
    /**
     * {@inheritDoc}
     */
    protected function write(array $record)
    {
        $data = $record["formatted"];

//        $routingKey = $record['level_name'];

        $message = new AMQPMessage(
            (string) $data,
            array(
                'delivery_mode' => 2,
                'content_type' => 'application/json'
            )
        );
        
        // @todo: The routing key is not working, need to check why
        $this->exchange->basic_publish(
            $message,
            $this->exchangeName
        );
    }
}
