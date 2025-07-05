<?php

namespace App\patrones\creacionales\abstractFactory\paypal;

use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;

class PaypalValidator implements PaymentValidator
{
    public function validatePayment(float $transactionId): void
    {
        echo "Validación exitosa del pago con ID de transacción: {$transactionId} a través de Paypal. <br>";
    }
}
