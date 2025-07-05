<?php

namespace App\patrones\creacionales\abstractFactory\mercadoPago;

use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;

class MercadoPagoProcessor implements PaymentProcessor
{
    public function initiatePayment(float $amount): void
    {
        echo "Pago de {$amount} procesado con éxito a través de Mercado Pago. <br>";
    }
}
