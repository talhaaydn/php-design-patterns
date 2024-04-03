<?php

namespace Creational\Factory;

enum NotificationType: string
{
    case EMAIL = 'email';
    case SMS = 'sms';
}