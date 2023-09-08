<?php

namespace Src\Solid\Srp;

use Src\Solid\Srp\ConfirmationMailFactory;
use Src\Solid\Srp\Message;

class ConfirmationMailMailer
{

    private $confirmationMailFactory;
    private $mailer;

    public function __construct(
        ConfirmationMailFactory $confirmationMailFactory,
        MailerInterface $mailer,
    ) {
        $this->confirmationMailFactory = $confirmationMailFactory;
        $this->mailer = $mailer;

    }

    public function sendTo(User $user)
    {
        $message = $this->createMessageFor($user);
        $this->sendMessage($message);

    }

    public function createMessageFor(User $user): Message
    {
        return $this->confirmationMailFactory->createMessageFor($user);
    }

    public function sendMessage(Message $message)
    {
        $this->mailer->send($message);
    }
}
