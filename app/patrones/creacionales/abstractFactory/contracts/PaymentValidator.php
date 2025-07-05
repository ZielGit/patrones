<?php

namespace App\patrones\creacionales\abstractFactory\contracts;

interface PaymentValidator
{
    public function validatePayment(float $transactionId): void;
}
