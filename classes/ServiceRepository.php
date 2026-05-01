<?php

require_once __DIR__ . '/Service.php';

class ServiceRepository
{
    private $storageFile;

    public function __construct($storageFile)
    {
        $this->storageFile = (string) $storageFile;

        if (!is_dir(dirname($this->storageFile))) {
            mkdir(dirname($this->storageFile), 0755, true);
        }

        if (!file_exists($this->storageFile)) {
            $this->initializeStorage();
        }
    }

    public function all()
    {
        $items = $this->loadData();
        return array_map(function ($item) {
            return Service::fromArray($item);
        }, $items);
    }

    public function find($id)
    {
        $id = (int) $id;
        foreach ($this->loadData() as $item) {
            if ((int) ($item['id'] ?? 0) === $id) {
                return Service::fromArray($item);
            }
        }
        return null;
    }

    public function create(Service $service)
    {
        $services = $this->loadData();
        $serviceArray = $service->toArray();
        $serviceArray['id'] = $this->nextId($services);
        $services[] = $serviceArray;
        $this->saveData($services);
        return Service::fromArray($serviceArray);
    }

    public function update(Service $service)
    {
        $services = $this->loadData();
        foreach ($services as $index => $item) {
            if ((int) ($item['id'] ?? 0) === $service->getId()) {
                $services[$index] = $service->toArray();
                $this->saveData($services);
                return true;
            }
        }
        return false;
    }

    public function delete($id)
    {
        $id = (int) $id;
        $services = $this->loadData();
        $filtered = array_filter($services, function ($item) use ($id) {
            return (int) ($item['id'] ?? 0) !== $id;
        });

        if (count($filtered) === count($services)) {
            return false;
        }

        $this->saveData(array_values($filtered));
        return true;
    }

    private function loadData()
    {
        $content = @file_get_contents($this->storageFile);
        if ($content === false) {
            return [];
        }

        $data = json_decode($content, true);
        return is_array($data) ? $data : [];
    }

    private function saveData(array $services)
    {
        file_put_contents($this->storageFile, json_encode($services, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    private function nextId(array $services)
    {
        $maxId = 0;
        foreach ($services as $service) {
            $id = (int) ($service['id'] ?? 0);
            if ($id > $maxId) {
                $maxId = $id;
            }
        }
        return $maxId + 1;
    }

    private function initializeStorage()
    {
        $this->saveData([
            [
                'id' => 1,
                'title' => 'Servis a údržba',
                'description' => 'Pravidelný servis, výmena olejov a filtrov, kontrola brzd a pneumatík',
                'icon' => '🔧',
                'image' => 'img/Servis a údržba.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Diagnostika',
                'description' => 'Komplexná elektronická diagnostika, kontrola motora a podvozku',
                'icon' => '📊',
                'image' => 'img/Diagnostika.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Opravy motora',
                'description' => 'Generálne opravy, výmena rozvodov, opravy chladenia a vstrekovania',
                'icon' => '⚙️',
                'image' => 'img/Opravy motora.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Klimatizácia',
                'description' => 'Servis klimatizácie, plnenie chladiva, dezinfekcia',
                'icon' => '❄️',
                'image' => 'img/Klimatizácia.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Elektrika',
                'description' => 'Opravy elektrickej inštalácie, batérie, generátory, štartéry',
                'icon' => '⚡',
                'image' => 'img/Elektrika.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Karoséria a lak',
                'description' => 'Opravy karosérie, lakované práce, odstránenie hrdze',
                'icon' => '🚗',
                'image' => 'img/Karoséria a lak.jpg'
            ]
        ]);
    }
}
