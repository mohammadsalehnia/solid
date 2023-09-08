<?php

namespace Src\Solid\OCP;

class XMLEncoder implements EncoderInterface
{
    public function __construct()
    {
        // Test
    }

    public function encode($data): string
    {
        return "<data></data>";
    }

}
