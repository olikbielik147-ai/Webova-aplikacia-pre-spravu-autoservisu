<?php

declare(strict_types=1);

class Service
{
    private int $id;
    private string $title;
    private string $description;
    private string $icon;
    private string $image;

    public function __construct(int $id, string $title, string $description, string $icon, string $image)
    {
        $this->id = $id;
        $this->title = trim($title);
        $this->description = trim($description);
        $this->icon = trim($icon);
        $this->image = trim($image);
    }

    public static function fromArray(array $data): self
    {
        return new self(
            (int) ($data['id'] ?? 0),
            (string) ($data['title'] ?? ''),
            (string) ($data['description'] ?? ''),
            (string) ($data['icon'] ?? ''),
            (string) ($data['image'] ?? '')
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'icon' => $this->icon,
            'image' => $this->image,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}
