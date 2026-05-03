<?php

class Database
{
    private PDO $pdo;

    public function __construct(
        string $host = 'localhost',
        string $username = 'root',
        string $dbpassword = '',
        string $dbname = 'servis'
    ) {
        $this->connect($host, $username, $dbpassword, $dbname);
        $this->initializeSchema();
    }

    private function connect(string $host, string $username, string $dbpassword, string $dbname): void
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;charset=utf8mb4", $username, $dbpassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            $this->pdo->exec("USE `$dbname`");
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    private function initializeSchema(): void
    {
        $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS services (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                description TEXT NOT NULL,
                icon VARCHAR(255) NOT NULL,
                image VARCHAR(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
        );

        $this->seedDefaultServices();
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }

    private function seedDefaultServices(): void
    {
        $stmt = $this->pdo->query('SELECT COUNT(*) FROM services');
        $count = (int) $stmt->fetchColumn();
        if ($count > 0) {
            return;
        }

        $services = [
            [
                'title' => 'Servis a údržba',
                'description' => 'Pravidelný servis, výmena olejov a filtrov, kontrola brzd a pneumatík',
                'icon' => '🔧',
                'image' => 'img/Servis a údržba.jpg'
            ],
            [
                'title' => 'Diagnostika',
                'description' => 'Komplexná elektronická diagnostika, kontrola motora a podvozku',
                'icon' => '📊',
                'image' => 'img/Diagnostika.jpg'
            ],
            [
                'title' => 'Opravy motora',
                'description' => 'Generálne opravy, výmena rozvodov, opravy chladenia a vstrekovania',
                'icon' => '⚙️',
                'image' => 'img/Opravy motora.jpg'
            ],
            [
                'title' => 'Klimatizácia',
                'description' => 'Servis klimatizácie, plnenie chladiva, dezinfekcia',
                'icon' => '❄️',
                'image' => 'img/Klimatizácia.jpg'
            ],
            [
                'title' => 'Elektrika',
                'description' => 'Opravy elektrickej inštalácie, batérie, generátory, štartéry',
                'icon' => '⚡',
                'image' => 'img/Elektrika.jpg'
            ],
            [
                'title' => 'Karoséria a lak',
                'description' => 'Opravy karosérie, lakované práce, odstránenie hrdze',
                'icon' => '🚗',
                'image' => 'img/Karoséria a lak.jpg'
            ]
        ];

        $insert = $this->pdo->prepare('INSERT INTO services (title, description, icon, image) VALUES (:title, :description, :icon, :image)');
        foreach ($services as $service) {
            $insert->execute([
                ':title' => $service['title'],
                ':description' => $service['description'],
                ':icon' => $service['icon'],
                ':image' => $service['image'],
            ]);
        }
    }
}
