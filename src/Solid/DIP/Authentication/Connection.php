<?php

namespace Src\Solid\DIP\Authentication;

class Connection
{
    public function query(string $query,array $params): bool
    {
        return true;
    }
}
