<?php

namespace App\solid\ocp;

use App\solid\ocp\interfaces\MetodoPago;

class ProcesadorPagos
{
    public function procesarPago(MetodoPago $metodoPago, float $monto): void
    {
        $metodoPago->procesar($monto);
        echo "Generando orden. </br>";
    }
}
