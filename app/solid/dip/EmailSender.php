<?php

namespace App\solid\dip;

use App\solid\dip\interfaces\Notifier;

class EmailSender implements Notifier
{
    public function send(User $user, string $subject, string $message): void
    {
        echo "Enviando correo a: " . $user->getEmail() . "</br>";
        echo "Asunto: " . $subject . "</br>";
        echo "Mensaje: " . $message . "</br>";
    }
}
