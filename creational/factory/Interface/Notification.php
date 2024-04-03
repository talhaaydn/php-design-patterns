<?php

namespace Creational\Factory\Interface;

interface Notification {
    public function send(string $to, string $text): void;
}