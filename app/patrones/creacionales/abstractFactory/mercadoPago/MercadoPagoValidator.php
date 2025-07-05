<?php

namespace App\patrones\creacionales\abstractFactory\mercadoPago;

use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;

class MercadoPagoValidator implements PaymentValidator
{
    public function validatePayment(float $transactionId): void
    {
        echo "Validación exitosa del pago con ID de transacción: {$transactionId} a través de Mercado Pago. <br>";
    }
}
