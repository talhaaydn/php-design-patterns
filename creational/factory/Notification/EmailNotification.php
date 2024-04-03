<?php

namespace Creational\Factory\Notification;

use Creational\Factory\Interface\Notification;

class EmailNotification implements Notification
{
    public function send(string $to, string $text): void
    {
        echo "
            Notification sent via email \n
            To: {$to} \n
            Data: {$text}
        ";
    }
}