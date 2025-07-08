<?php

use App\patrones\estructurales\adapter\factories\NotificationFactory;

require __DIR__ . '/vendor/autoload.php';

$notification = NotificationFactory::create('email');
$notification->send('Hola, este es un mensaje de prueba para el adaptador de correo electrónico');
