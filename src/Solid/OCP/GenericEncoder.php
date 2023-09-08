<?php

namespace Src\Solid\OCP;

class GenericEncoder
{
    private $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function encode($data, string $format): string
    {

        $encoder = $this->encoderFactory->createEncoder($format);
        return $encoder->encode($data);
    }
}
