<?php

namespace Src\Solid\DIP\Users;

use Illuminate\Contracts\Events\Dispatcher;

class LaravelDispatcher implements DispatcherInterface
{
    private $dispatcher;

    /**
     * @param Dispatcher $dispatcher
     */
    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(string $event, array $payload): void
    {
        // TODO: Implement dispatch() method.
    }
}
