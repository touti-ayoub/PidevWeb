<?php

namespace App\Service;

use Symfony\Component\Messenger\MessageBusInterface;
use App\Message\NotificationMessage;

class NotificationService
{
    private $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    public function sendNotification($userId, $message)
    {
        $notificationMessage = new NotificationMessage($userId, $message);
        $this->messageBus->dispatch($notificationMessage);
    }
}