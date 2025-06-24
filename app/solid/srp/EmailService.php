<?php

namespace App\solid\srp;

class EmailService
{
    public function sendEmail(User $user): void
    {
        echo "Sending email to {$user->getEmail()}. </br>";
    }
}
