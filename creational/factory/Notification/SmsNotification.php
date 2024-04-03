<?php

namespace Creational\Factory\Notification;

use Creational\Factory\Interface\Notification;

class SmsNotification implements Notification
{
    public function send(string $to, string $text): void
    {
        echo "
            Notification sent via sms \n
            To: {$to} \n
            Data: {$text}
        ";
    }
}