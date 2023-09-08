<?php

namespace Src\Solid\DIP\Authentication;

class MongoUserProvider implements UserProviderInterface
{

    public function findUser(string $username): bool
    {
        // TODO: Implement findUser() method.

        return true;
    }
}
