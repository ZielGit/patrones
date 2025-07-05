<?php

namespace App\patrones\creacionales\abstractFactory\mercadoPago;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;

class MercadoPagoAuthenticator implements PaymentAuthenticator
{
    public function authenticate(): void
    {
        echo "Autenticación exitosa con Mercado Pago. <br>";
    }
}
