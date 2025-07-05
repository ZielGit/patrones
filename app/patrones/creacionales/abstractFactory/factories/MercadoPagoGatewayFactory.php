<?php

namespace App\patrones\creacionales\abstractFactory\factories;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;
use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;
use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;
use App\patrones\creacionales\abstractFactory\mercadoPago\MercadoPagoAuthenticator;
use App\patrones\creacionales\abstractFactory\mercadoPago\MercadoPagoProcessor;
use App\patrones\creacionales\abstractFactory\mercadoPago\MercadoPagoValidator;

class MercadoPagoGatewayFactory implements PaymentGatewayFactory
{
    public function createAutheticator(): PaymentAuthenticator
    {
        return new MercadoPagoAuthenticator();
    }

    public function createProcessor(): PaymentProcessor
    {
        return new MercadoPagoProcessor();
    }

    public function createValidator(): PaymentValidator
    {
        return new MercadoPagoValidator();
    }
}
