<?php

namespace Src\Solid\DIP\Users;

class UserService
{
    private $dispatcher;

    /**
     * @param DispatcherInterface $dispatcher
     */
    public function __construct(DispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function register(array $params): void
    {
        // ... insert user in database

        $this->dispatcher->dispatch('user_register', ['user_id' => 1]);
    }


}
