<?php

use App\solid\dip\NotificationService;
use App\solid\dip\SmsSender;
use App\solid\dip\User;

require __DIR__ . '/vendor/autoload.php';

$user = new User('Frans', 'frans@gmail.com', '1234567890');

$notificationService = new NotificationService(new SmsSender());
$notificationService->notifyUser($user, 'Bienvenido', 'Hola Frans, bienvenido a nuestro servicio.');
