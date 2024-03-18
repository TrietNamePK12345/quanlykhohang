<?php

namespace App\Core;

trait Connection
{
    public \PDO $pdo;

    public function createConnection()
    {
        $dsn = $_ENV['DB_DSN'] ?? '';
        $user = $_ENV['DB_USER'] ?? '';
        $password = $_ENV['DB_PASSWORD'] ?? '';
        $this->pdo = new \PDO($dsn, $user, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    }

}
