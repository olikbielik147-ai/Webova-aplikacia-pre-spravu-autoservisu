<?php

declare(strict_types=1);

// Autoload pre vsetky triedy do jedneho adresara triedy.
spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';

    if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
        return;
    }

    $fileName = basename(str_replace('\\', '/', $class));
    $filePath = __DIR__ . '/triedy/' . $fileName . '.php';

    if (is_file($filePath)) {
        require_once $filePath;
    }
});

// Inicializacia databazy a kontrolera pre CRUD nad entitou Produkt.
$database = new App\Database();
$productRepository = new App\ProductRepository($database);
$productController = new App\ProductController($productRepository);
