<?php

namespace App\patrones\estructurales\facade;

class SMTPConnection
{
    private string $connection;

    public function __construct()
    {
        echo "SMTP: Conectando al servidor <br>";
    }

    public function authenticate(string $username, string $password)
    {
        echo "SMTP: Autenticando usuario $username <br>";
        $this->connection = 'smtp_connection';
    }

    public function getConnection(): string
    {
        return $this->connection;
    }
}
