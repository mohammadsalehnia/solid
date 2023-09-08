<?php

namespace Src\Solid\OCP;

class JsonEncoder implements EncoderInterface
{
    public function __construct()
    {
        // Test
    }

    public function encode($data): string
    {
        return '{data:""}';
    }
}
