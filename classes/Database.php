<?php

class Dbh
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
            $this->initializeUsersTable();
            $this->initializeContactMessagesTable();
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    protected function connect(): PDO
    {
        return $this->pdo;
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }

    private function initializeUsersTable(): void
    {
        $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS users (
                users_id INT AUTO_INCREMENT PRIMARY KEY,
                users_uid VARCHAR(100) NOT NULL UNIQUE,
                users_email VARCHAR(255) NOT NULL UNIQUE,
                users_pwd VARCHAR(255) NOT NULL,
                users_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;"
        );
    }

    private function initializeContactMessagesTable(): void
    {
        $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS contact_messages (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(50) DEFAULT NULL,
                message TEXT NOT NULL,
                consent TINYINT(1) NOT NULL DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;"
        );
    }
}

class Database extends Dbh
{
}
