<?php

namespace App\patrones\creacionales\abstractFactory\factories;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;
use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;
use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;
use App\patrones\creacionales\abstractFactory\paypal\PaypalAuthenticator;
use App\patrones\creacionales\abstractFactory\paypal\PaypalProcessor;
use App\patrones\creacionales\abstractFactory\paypal\PaypalValidator;

class PaypalGatewayFactory implements PaymentGatewayFactory
{
    public function createAutheticator(): PaymentAuthenticator
    {
        return new PaypalAuthenticator();
    }

    public function createProcessor(): PaymentProcessor
    {
        return new PaypalProcessor();
    }

    public function createValidator(): PaymentValidator
    {
        return new PaypalValidator();
    }
}
