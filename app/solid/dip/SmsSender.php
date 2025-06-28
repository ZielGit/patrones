<?php

namespace App\solid\dip;

use App\solid\dip\interfaces\Notifier;

class SmsSender implements Notifier
{
    public function send(User $user, string $subject, string $message): void
    {
        echo "Enviando SMS a: " . $user->getPhone() . "</br>";
        echo "Asunto: " . $subject . "</br>";
        echo "Mensaje: " . $message . "</br>";
    }
}
