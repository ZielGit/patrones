<?php

use App\solid\ocp\pagos\Paypal;
use App\solid\ocp\pagos\Tarjeta;
use App\solid\ocp\pagos\Transferencia;
use App\solid\ocp\ProcesadorPagos;

require __DIR__ . '/vendor/autoload.php';

$procesador = new ProcesadorPagos();
$procesador->procesarPago(new Paypal(), 1000.00);
$procesador->procesarPago(new Tarjeta(), 500.00);
$procesador->procesarPago(new Transferencia(), 900.00);
