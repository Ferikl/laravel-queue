<?php
namespace Enqueue\LaravelQueue\Command;


use Enqueue\Container\Container;
use Enqueue\SimpleClient\SimpleClient;

class SetupBrokerCommand extends \Enqueue\Symfony\Client\SetupBrokerCommand
{
    public function __construct(SimpleClient $client)
    {
        $container = new Container([
            'driver' => $client->getDriver(),
        ]);

        parent::__construct($container, 'driver');
    }
}