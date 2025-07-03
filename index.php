<?php

use App\patrones\creacionales\factory\NotificadorFactory;

require __DIR__ . '/vendor/autoload.php';

$type = 'sms';

try {
    $notification = NotificadorFactory::create($type);
    $notification->sendNotification("Hola, esta es una notificación de prueba por $type.");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
    exit;
}
