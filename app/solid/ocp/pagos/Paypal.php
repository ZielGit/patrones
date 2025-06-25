<?php

namespace App\solid\ocp\pagos;

use App\solid\ocp\interfaces\MetodoPago;

class Paypal implements MetodoPago
{
    public function procesar(float $monto): void
    {
        echo "Procesando pago con PayPal por un monto de {$monto}. </br>";
    }
}
