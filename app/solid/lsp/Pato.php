<?php

namespace App\solid\lsp;

use App\solid\lsp\interfaces\AveVoladora;

class Pato extends Ave implements AveVoladora
{
    public function volar(): void
    {
        echo "El pato está volando. </br>";
    }
}
