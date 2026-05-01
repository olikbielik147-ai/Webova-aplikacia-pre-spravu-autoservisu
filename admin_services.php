<?php
require_once __DIR__ . '/classes/ServiceRepository.php';

$repository = new ServiceRepository(__DIR__ . '/storage/services.json');
$message = '';
$errors = [];
$editingService = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $icon = trim($_POST['icon'] ?? '');
    $image = trim($_POST['image'] ?? '');
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;

    if ($action === 'delete') {
        if ($repository->delete($id)) {
            $message = 'Služba bola úspešne odstránená.';
        } else {
            $errors[] = 'Nepodarilo sa odstrániť službu.';
        }
    } else {
        if ($title === '') {
            $errors[] = 'Názov služby je povinný.';
        }
        if ($description === '') {
            $errors[] = 'Popis služby je povinný.';
        }
        if ($icon === '') {
            $errors[] = 'Ikona služby je povinná.';
        }
        if ($image === '') {
            $errors[] = 'Cesta k obrázku je povinná.';
        }

        if (empty($errors)) {
            if ($action === 'create') {
                $repository->create(new Service(0, $title, $description, $icon, $image));
                $message = 'Služba bola úspešne pridaná.';
            } elseif ($action === 'update') {
                $service = new Service($id, $title, $description, $icon, $image);
                if ($repository->update($service)) {
                    $message = 'Služba bola úspešne aktualizovaná.';
                } else {
                    $errors[] = 'Nepodarilo sa aktualizovať službu.';
                }
            }
        }
    }
}

$services = $repository->all();
$editId = isset($_GET['edit']) ? (int) $_GET['edit'] : 0;
if ($editId > 0) {
    $editingService = $repository->find($editId);
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Správa služieb AutoServis Pro - OOP CRUD nad entitou služieb.">
    <meta name="keywords" content="admin, správa, služby, CRUD, autoservis">
    <meta name="author" content="AutoServis Pro">
    <title>Správa služieb - AutoServis Pro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/zaciatok_konca/header.php'; ?>
    <main>
        <section class="page-header page-header-blue">
            <div class="container">
                <h1>Správa služieb</h1>
                <p>Tu môžete vykonať CRUD operácie nad entitou služieb.</p>
            </div>
        </section>

        <section class="admin-section">
            <div class="container">
                <?php if ($message): ?>
                    <div class="form-success"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></div>
                <?php endif; ?>
                <?php if (!empty($errors)): ?>
                    <div class="form-errors">
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="admin-grid">
                    <div class="admin-panel">
                        <h2><?= $editingService ? 'Upraviť službu' : 'Pridať službu' ?></h2>
                        <form method="post" class="admin-form">
                            <input type="hidden" name="action" value="<?= $editingService ? 'update' : 'create' ?>">
                            <input type="hidden" name="id" value="<?= $editingService ? $editingService->getId() : '' ?>">

                            <div class="form-group">
                                <label for="title">Názov služby</label>
                                <input type="text" id="title" name="title" value="<?= htmlspecialchars($editingService ? $editingService->getTitle() : '', ENT_QUOTES, 'UTF-8') ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Popis</label>
                                <textarea id="description" name="description" rows="4" required><?= htmlspecialchars($editingService ? $editingService->getDescription() : '', ENT_QUOTES, 'UTF-8') ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="icon">Ikona</label>
                                <input type="text" id="icon" name="icon" value="<?= htmlspecialchars($editingService ? $editingService->getIcon() : '', ENT_QUOTES, 'UTF-8') ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Obrázok</label>
                                <input type="text" id="image" name="image" value="<?= htmlspecialchars($editingService ? $editingService->getImage() : '', ENT_QUOTES, 'UTF-8') ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary"><?= $editingService ? 'Uložiť zmeny' : 'Pridať službu' ?></button>
                            <?php if ($editingService): ?>
                                <a href="admin_services.php" class="btn btn-secondary">Zrušiť</a>
                            <?php endif; ?>
                        </form>
                    </div>

                    <div class="admin-panel">
                        <h2>Existujúce služby</h2>
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Názov</th>
                                    <th>Ikona</th>
                                    <th>Akcie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($services as $service): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($service->getId(), ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($service->getTitle(), ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($service->getIcon(), ENT_QUOTES, 'UTF-8') ?></td>
                                        <td>
                                            <a href="admin_services.php?edit=<?= htmlspecialchars($service->getId(), ENT_QUOTES, 'UTF-8') ?>" class="btn btn-secondary">Upraviť</a>
                                            <form method="post" class="inline-form" onsubmit="return confirm('Naozaj chcete túto službu odstrániť?');">
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="id" value="<?= htmlspecialchars($service->getId(), ENT_QUOTES, 'UTF-8') ?>">
                                                <button type="submit" class="btn btn-danger">Odstrániť</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . '/zaciatok_konca/footer.php'; ?>
    <?php require_once __DIR__ . '/zaciatok_konca/skripty.php'; ?>
</body>
</html>
