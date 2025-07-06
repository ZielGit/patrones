<?php

use App\patrones\creacionales\builder\User;
use App\patrones\creacionales\builder\UserBuilder;

require __DIR__ . '/vendor/autoload.php';

$user = (new UserBuilder())
    ->setName('Frans')
    ->setEmail('frans@gmail.com')
    ->setAddress('jr solar 123')
    ->setPhone('123456789')
    ->setPassword('password')
    ->build();

echo "Nombre: " . $user->getName() . '<br>';
echo "Email: " . $user->getEmail() . '<br>';
