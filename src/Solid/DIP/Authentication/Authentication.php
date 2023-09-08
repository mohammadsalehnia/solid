<?php

namespace Src\Solid\DIP\Authentication;

class Authentication
{
    private $user_provider;

    /**
     * @param UserProviderInterface $user_provider
     */
    public function __construct(UserProviderInterface $user_provider)
    {
        $this->user_provider = $user_provider;
    }

    public function check(string $username,string $password)
    {
        $user = $this->user_provider->findUser($username);
    }


}
