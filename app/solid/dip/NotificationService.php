<?php

namespace App\solid\dip;

use App\solid\dip\interfaces\Notifier;

class NotificationService
{
    private Notifier $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function notifyUser(User $user, string $subject, string $message): void
    {
        $this->notifier->send($user, $subject, $message);
    }
}
