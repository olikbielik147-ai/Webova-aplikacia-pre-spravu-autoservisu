<?php
$errors = [];
$name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $message = trim($_POST["message"] ?? "");
    $consent = isset($_POST["consent"]);

    if ($name === "" || mb_strlen($name) < 2) {
        $errors["name"] = "Meno musí mať aspoň 2 znaky.";
    }

    if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Zadajte platný email.";
    }

    if ($message === "" || mb_strlen($message) < 10) {
        $errors["message"] = "Správa musí mať aspoň 10 znakov.";
    }

    if (!$consent) {
        $errors["consent"] = "Musíte súhlasiť so spracovaním údajov.";
    }

    if (empty($errors)) {
        header("Location: dakujeme.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Kontakt - AutoServis Pro. Kontaktujte nás na +421 901 234 567 alebo info@autoservispro.sk. Nájdete nás na Hlavná 123, Žilina.">
    <meta name="keywords" content="kontakt, autoservis žilina, telefón, email, adresa, objednávka, formulár">
    <meta name="author" content="AutoServis Pro">
    
    <title>Kontakt - AutoServis Pro</title>
    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php require __DIR__ . '/zaciatok_konca/header.php'; ?>

    <main>
        <section class="page-header page-header-blue">
            <div class="container">
                <h1>Kontakt</h1>
                <p>Máte otázky? Potrebujete poradiť? Kontaktujte nás, radi vám pomôžeme.</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>Kontaktné údaje</h2>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div>
                                <h4>Adresa</h4>
                                <p>Hlavná 123<br>010 01 Žilina<br>Slovenská republika</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div>
                                <h4>Telefón</h4>
                                <p><a href="tel:+421901234567">+421 901 234 567</a></p>
                                <p><a href="tel:+421412345678">+421 41 234 5678</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div>
                                <h4>Email</h4>
                                <p><a href="mailto:info@autoservispro.sk">info@autoservispro.sk</a></p>
                                <p><a href="mailto:servis@autoservispro.sk">servis@autoservispro.sk</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">⏰</div>
                            <div>
                                <h4>Otváracie hodiny</h4>
                                <p>
                                    Pondelok - Piatok: 7:00 - 17:00<br>
                                    Sobota: 8:00 - 12:00<br>
                                    Nedeľa: Zatvorené
                                </p>
                            </div>
                        </div>

                        <div class="contact-image">
                            <img src="img/oprava vozidla kontakt.jpg" alt="AutoServis Pro" loading="lazy">
                        </div>
                    </div>
                    <div class="contact-form-wrapper">
                        <h2>Napíšte nám</h2>
                        <?php if (!empty($errors)): ?>
                            <div class="form-errors">
                                <p>Opravte prosím chyby vo formulári.</p>
                            </div>
                        <?php endif; ?>
                        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="contact-form">
                            <div class="form-group">
                                <label for="name">Meno</label>
                                <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" required>
                                <?php if (!empty($errors['name'])): ?>
                                    <p class="form-error"><?= htmlspecialchars($errors['name']) ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
                                <?php if (!empty($errors['email'])): ?>
                                    <p class="form-error"><?= htmlspecialchars($errors['email']) ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefón</label>
                                <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>">
                            </div>

                            <div class="form-group">
                                <label for="message">Správa</label>
                                <textarea id="message" name="message" rows="6" required><?= htmlspecialchars($message) ?></textarea>
                                <?php if (!empty($errors['message'])): ?>
                                    <p class="form-error"><?= htmlspecialchars($errors['message']) ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="form-group form-checkbox">
                                <label>
                                    <input type="checkbox" name="consent" <?= isset($_POST['consent']) ? 'checked' : '' ?>>
                                    Súhlasím so spracovaním osobných údajov.
                                </label>
                                <?php if (!empty($errors['consent'])): ?>
                                    <p class="form-error"><?= htmlspecialchars($errors['consent']) ?></p>
                                <?php endif; ?>
                            </div>

                            <button type="submit" class="btn btn-primary">Odoslať správu</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
   <?php require __DIR__ . '/zaciatok_konca/footer.php'; ?>
<?php require __DIR__ . '/zaciatok_konca/skripty.php'; ?>
</body>
</html>M