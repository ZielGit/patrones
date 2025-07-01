<?php

use App\patrones\creacionales\singleton\ConexionDB;

require __DIR__ . '/vendor/autoload.php';

$db1 = ConexionDB::getInstance();
$db1->query("SELECT * FROM users");

$db2 = ConexionDB::getInstance();
$db2->query("SELECT * FROM products");
