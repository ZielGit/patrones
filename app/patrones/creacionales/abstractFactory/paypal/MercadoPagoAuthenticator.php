<?php

namespace App\patrones\creacionales\abstractFactory\paypal;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;

class PaypalAuthenticator implements PaymentAuthenticator
{
    public function authenticate(): void
    {
        echo "Autenticación exitosa con Paypal. <br>";
    }
}
