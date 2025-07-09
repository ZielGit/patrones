<?php

namespace App\patrones\estructurales\facade;

class MailSender
{
    public function send(SMTPConnection $smtp, MessageBuilder $messageBuilder)
    {
        echo "Usando conexión: " . $smtp->getConnection() . "<br>";
        echo "Enviando mensaje: " . $messageBuilder->getContent() . "<br>";
    }
}
