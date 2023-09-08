<?php

namespace Src\Solid\DIP\Authentication;

class UserProvider implements UserProviderInterface
{

    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findUser(string $username): bool
    {
        // TODO: Implement findUser() method.

        $user = $this->connection->query("SELECT * FROM users WHERE username=?", ['username' => $username]);

        if (!$user) {
            throw new \RuntimeException('invalid username or password');
        }

        return true;
    }
}
