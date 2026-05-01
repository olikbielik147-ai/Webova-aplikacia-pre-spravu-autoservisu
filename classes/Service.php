<?php

class Service
{
    private $id;
    private $title;
    private $description;
    private $icon;
    private $image;

    public function __construct($id, $title, $description, $icon, $image)
    {
        $this->id = (int) $id;
        $this->title = trim((string) $title);
        $this->description = trim((string) $description);
        $this->icon = trim((string) $icon);
        $this->image = trim((string) $image);
    }

    public static function fromArray(array $data)
    {
        return new self(
            $data['id'] ?? 0,
            $data['title'] ?? '',
            $data['description'] ?? '',
            $data['icon'] ?? '',
            $data['image'] ?? ''
        );
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'icon' => $this->icon,
            'image' => $this->image,
        ];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function getImage()
    {
        return $this->image;
    }
}
