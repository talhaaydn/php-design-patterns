<?php

namespace Creational\Factory;

use Creational\Factory\Notification\EmailNotification;
use Creational\Factory\Notification\SmsNotification;

class NotificationFactory
{
    public static function getInstance(
        NotificationType $notificationType
    ): EmailNotification|SmsNotification
    {
        if ($notificationType === NotificationType::SMS) {
            return new SmsNotification();
        }

        if ($notificationType === NotificationType::EMAIL) {
            return new EmailNotification();
        }

        return throw new \Exception("Invalid notification type");
    }
}