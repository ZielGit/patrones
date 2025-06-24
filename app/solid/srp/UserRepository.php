<?php

namespace App\solid\srp;

class UserRepository
{
    public function save(User $user): void
    {
        echo "Saving user {$user->getName()} to the database. </br>";
    }

    // Update
    // Delete
    // Find
}
