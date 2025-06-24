<?php

use App\solid\srp\EmailService;
use App\solid\srp\User;
use App\solid\srp\UserRepository;

require __DIR__ . '/vendor/autoload.php';

$user = new User('Frans Vilcahuamán', 'frans@gmail.com');

// Store in the database
$repository = new UserRepository();
$repository->save($user);

// Notify the user
$service = new EmailService();
$service->sendEmail($user);
