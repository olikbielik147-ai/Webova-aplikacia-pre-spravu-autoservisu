<?php

class Database
{
    private PDO $pdo;

    public function __construct(
        string $host = 'localhost',
        string $username = 'root',
        string $password = '',
        string $dbname = 'servis'
    ) {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
