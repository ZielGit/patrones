<?php

namespace App\solid\isp;

use App\solid\isp\interfaces\IChef;

class Chef implements IChef
{
    public function cocinar(): void
    {
        // Implementación de la lógica para cocinar
        echo "Cocinando los platillos. </br>";
    }

    public function prepararIngredientes(): void
    {
        // Implementación de la lógica para preparar ingredientes
        echo "Preparando los ingredientes. </br>";
    }

    public function supervisarCocina(): void
    {
        // Implementación de la lógica para supervisar la cocina
        echo "Supervisando la cocina. </br>";
    }
}
