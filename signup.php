<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/classes/signupcontroller.php';

    $signupContr = new SignupContr(
        $_POST['uid'] ?? '',
        $_POST['pwd'] ?? '',
        $_POST['pwdrepeat'] ?? '',
        $_POST['email'] ?? ''
    );
    $signupContr->signupUser();
}

$error = $_GET['error'] ?? '';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrácia | AutoServis Pro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/zaciatok_koniec/header.php'; ?>
    <main class="auth-page">
        <section class="auth-form">
            <h1>Registrácia</h1>
            <?php if ($error): ?>
                <div class="form-errors">
                    <?php if ($error === 'emptyinput'): ?>Vyplňte všetky polia.
                    <?php elseif ($error === 'invaliduid'): ?>Používateľské meno môže obsahovať len písmená a čísla.
                    <?php elseif ($error === 'invalidemail'): ?>Zadajte platný email.
                    <?php elseif ($error === 'passwordsdontmatch'): ?>Heslá sa nezhodujú.
                    <?php elseif ($error === 'useralreadytaken'): ?>Tento používateľ alebo email už existuje.
                    <?php elseif ($error === 'stmtfailed'): ?>Chyba prístupu k databáze. Skúste to znova.
                    <?php else: ?>Došlo k chybe. Skúste to znova.
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div class="form-group">
                    <label for="uid">Používateľské meno</label>
                    <input type="text" id="uid" name="uid" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Heslo</label>
                    <input type="password" id="pwd" name="pwd" required>
                </div>
                <div class="form-group">
                    <label for="pwdrepeat">Potvrďte heslo</label>
                    <input type="password" id="pwdrepeat" name="pwdrepeat" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrovať sa</button>
            </form>
            <p>Máte účet? <a href="login.php">Prihláste sa</a>.</p>
        </section>
    </main>
</body>
</html>
