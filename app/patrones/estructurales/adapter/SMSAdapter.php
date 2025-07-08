<?php

namespace App\patrones\estructurales\adapter;

use App\patrones\estructurales\adapter\factories\Notification;
use App\patrones\estructurales\adapter\services\SMSSender;

class SMSAdapter implements Notification
{
    private SMSSender $smssender;

    public function __construct(SMSSender $smssender)
    {
        $this->smssender = $smssender;
    }

    public function send(string $message): void
    {
        $this->smssender->sendSMS($message);
    }
}
