<?php

require_once __DIR__ . '/Service.php';
require_once __DIR__ . '/databaza/dabaza.php';

class ServiceRepository
{
    private Database $database;
    private PDO $pdo;

    public function __construct($storage = null)
    {
        if ($storage instanceof Database) {
            $this->database = $storage;
        } else {
            $this->database = new Database();
        }

        $this->pdo = $this->database->getConnection();
    }

    public function all()
    {
        $stmt = $this->pdo->query('SELECT id, title, description, icon, image FROM services ORDER BY id ASC');
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return array_map(function ($item) {
            return Service::fromArray($item);
        }, $items ?: []);
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare('SELECT id, title, description, icon, image FROM services WHERE id = :id LIMIT 1');
        $stmt->execute([':id' => (int) $id]);
        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        return $item ? Service::fromArray($item) : null;
    }

    public function create(Service $service)
    {
        $stmt = $this->pdo->prepare('INSERT INTO services (title, description, icon, image) VALUES (:title, :description, :icon, :image)');
        $stmt->execute([
            ':title' => $service->getTitle(),
            ':description' => $service->getDescription(),
            ':icon' => $service->getIcon(),
            ':image' => $service->getImage(),
        ]);

        return new Service((int) $this->pdo->lastInsertId(), $service->getTitle(), $service->getDescription(), $service->getIcon(), $service->getImage());
    }

    public function update(Service $service)
    {
        $stmt = $this->pdo->prepare('UPDATE services SET title = :title, description = :description, icon = :icon, image = :image WHERE id = :id');
        $stmt->execute([
            ':title' => $service->getTitle(),
            ':description' => $service->getDescription(),
            ':icon' => $service->getIcon(),
            ':image' => $service->getImage(),
            ':id' => $service->getId(),
        ]);

        return $stmt->rowCount() > 0;
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM services WHERE id = :id');
        $stmt->execute([':id' => (int) $id]);

        return $stmt->rowCount() > 0;
    }
}
