<?php

use App\patrones\creacionales\prototype\User;

require __DIR__ . '/vendor/autoload.php';

$user1 = new User('Frans', 'frans@gmail.com');

$user2 = $user1->clone();
$user2->setName('Frans 2');

echo $user1->getName();
