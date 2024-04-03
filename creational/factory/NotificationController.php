<?php

require '../../vendor/autoload.php';

use Creational\Factory\NotificationFactory;
use Creational\Factory\NotificationType;

NotificationFactory::getInstance(NotificationType::EMAIL)
    ->send("example@example.com", "Lorem ipsum dolor sit amet");

echo "\n";

NotificationFactory::getInstance(NotificationType::SMS)
    ->send("0555 555 55 55", "Lorem ipsum dolor sit amet");
