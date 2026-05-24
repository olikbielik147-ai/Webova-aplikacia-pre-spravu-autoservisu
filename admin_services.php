<?php
require_once __DIR__ . '/classes/AdminServiceController.php';

$controller = new AdminServiceController($_GET);
$controller->handleRequest($_POST);

$message = $controller->getMessage();
$errors = $controller->getErrors();
$services = $controller->getServices();
$editingService = $controller->getEditingService();
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
    <?php require_once __DIR__ . '/zaciatok_koniec/header.php'; ?>
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
    <?php require_once __DIR__ . '/zaciatok_koniec/footer.php'; ?>
    <script src="zaciatok_koniec/skripty.js"></script>
</body>
</html>
