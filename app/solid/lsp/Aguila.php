<?php

namespace App\solid\lsp;

use App\solid\lsp\interfaces\AveVoladora;

class Aguila extends Ave implements AveVoladora
{
    public function volar(): void
    {
        echo "El águila está volando. </br>";
    }
}
