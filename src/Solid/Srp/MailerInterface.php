<?php

namespace Src\Solid\Srp;

interface MailerInterface
{
    /** @send */
    public function send(Message $message): string;

}
