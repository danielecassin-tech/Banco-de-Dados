<?php 

$host = "192.168.10.90";
$usuario = "postgres";
$banco = "levelup";
$senha = "123dani";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);