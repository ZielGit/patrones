<?php

namespace App\patrones\creacionales\factory\notificadores;

use App\patrones\creacionales\factory\interfaces\NotificationInterface;

class EmailNotification implements NotificationInterface
{
    public function sendNotification(string $message): void
    {
        // Aquí se implementaría la lógica para enviar una notificación por correo electrónico
        echo "Enviando notificación por correo electrónico: $message. <br>";
    }
}
