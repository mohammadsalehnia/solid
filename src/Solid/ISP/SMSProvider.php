<?php

namespace Src\Solid\ISP;

interface SMSProvider
{
    public function sendSMS(): void;
}
