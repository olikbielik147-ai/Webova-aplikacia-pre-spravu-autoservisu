<?php

require_once __DIR__ . '/ServiceRepository.php';

class AdminServiceController
{
    private ServiceRepository $repository;
    private array $errors = [];
    private string $message = '';
    private ?Service $editingService;

    public function __construct(array $get)
    {
        $this->repository = new ServiceRepository(new Database());
        $this->editingService = isset($get['edit']) ? $this->repository->find((int) $get['edit']) : null;
    }

    public function handleRequest(array $post): void
    {
        $action = $post['action'] ?? '';
        if ($action === '') {
            return;
        }

        if ($action === 'delete') {
            $this->delete((int) ($post['id'] ?? 0));
            return;
        }

        if (!$this->validate($post)) {
            return;
        }

        $service = new Service(
            (int) ($post['id'] ?? 0),
            $post['title'] ?? '',
            $post['description'] ?? '',
            $post['icon'] ?? '',
            $post['image'] ?? ''
        );

        if ($action === 'create') {
            $this->repository->create($service);
            $this->message = 'Služba bola úspešne pridaná.';
        } elseif ($action === 'update') {
            $updated = $this->repository->update($service);
            if ($updated) {
                $this->message = 'Služba bola úspešne aktualizovaná.';
            } else {
                $this->errors[] = 'Nepodarilo sa aktualizovať službu.';
            }
        }
    }

    public function getServices(): array
    {
        return $this->repository->all();
    }

    public function getEditingService(): ?Service
    {
        return $this->editingService;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    private function delete(int $id): void
    {
        if ($this->repository->delete($id)) {
            $this->message = 'Služba bola úspešne odstránená.';
        } else {
            $this->errors[] = 'Nepodarilo sa odstrániť službu.';
        }
    }

    private function validate(array $post): bool
    {
        foreach (['title' => 'Názov služby je povinný.', 'description' => 'Popis služby je povinný.', 'icon' => 'Ikona služby je povinná.', 'image' => 'Cesta k obrázku je povinná.'] as $field => $message) {
            if (trim((string) ($post[$field] ?? '')) === '') {
                $this->errors[] = $message;
            }
        }

        return empty($this->errors);
    }
}
