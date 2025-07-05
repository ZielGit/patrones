<?php

use App\patrones\creacionales\abstractFactory\factories\PaypalGatewayFactory;

require __DIR__ . '/vendor/autoload.php';

$gatewayFactory = new PaypalGatewayFactory();

$paymentAuthenticator = $gatewayFactory->createAutheticator();
$paymentProcessor = $gatewayFactory->createProcessor();
$paymentValidator = $gatewayFactory->createValidator();

$paymentAuthenticator->authenticate();
$paymentProcessor->initiatePayment(100.00);
$paymentValidator->validatePayment('4523589621243');
