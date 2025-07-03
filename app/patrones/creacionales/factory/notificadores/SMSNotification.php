<?php

namespace App\patrones\creacionales\factory\notificadores;

use App\patrones\creacionales\factory\interfaces\NotificationInterface;

class SMSNotification implements NotificationInterface
{
    public function sendNotification(string $message): void
    {
        // Aquí se implementaría la lógica para enviar una notificación por SMS
        echo "Enviando notificación por SMS: $message. <br>";
    }
}
