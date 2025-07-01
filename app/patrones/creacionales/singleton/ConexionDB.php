<?php

namespace App\patrones\creacionales\singleton;

class ConexionDB
{
    private static ?ConexionDB $instance = null;

    private function __construct()
    {
        echo "Conectando a la base de datos. <br>";
    }

    public static function getInstance(): ConexionDB
    {
        if (self::$instance === null) {
            self::$instance = new ConexionDB();
        }
        return self::$instance;
    }

    public function query(string $sql)
    {
        echo "Ejecutando consulta: $sql. <br>";
    }
}
