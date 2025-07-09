<?php

use App\patrones\estructurales\facade\MailerFacade;

require __DIR__ . '/vendor/autoload.php';

$mailer = new MailerFacade();
$mailer->send('frans', '123456', 'Hola, este es un mensaje de prueba');
