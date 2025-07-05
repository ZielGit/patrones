<?php

namespace App\patrones\creacionales\abstractFactory\paypal;

use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;

class PaypalProcessor implements PaymentProcessor
{
    public function initiatePayment(float $amount): void
    {
        echo "Pago de {$amount} procesado con éxito a través de Paypal. <br>";
    }
}
