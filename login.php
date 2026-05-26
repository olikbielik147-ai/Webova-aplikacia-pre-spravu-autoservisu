<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/classes/login.controller.php';

    $loginContr = new LoginContr(
        $_POST['login'] ?? '',
        $_POST['pwd'] ?? ''
    );
    $loginContr->loginUser();
}

$error = $_GET['error'] ?? '';
$signupSuccess = isset($_GET['signup']) && $_GET['signup'] === 'success';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prihlásenie | AutoServis Pro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/zaciatok_koniec/header.php'; ?>
    <main class="auth-page">
        <section class="auth-form">
            <h1>Prihlásenie</h1>
            <?php if ($signupSuccess): ?>
                <div class="form-success">Registrácia prebehla úspešne. Môžete sa prihlásiť.</div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="form-errors">
                    <?php if ($error === 'emptyinput'): ?>Vyplňte všetky polia.
                    <?php elseif ($error === 'stmtfailed'): ?>Chyba prístupu k databáze. Skúste to znova.
                    <?php elseif ($error === 'wronglogin'): ?>Neplatné používateľské meno alebo email.
                    <?php elseif ($error === 'wrongpassword'): ?>Nesprávne heslo.
                    <?php else: ?>Došlo k chybe. Skúste to znova.
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div class="form-group">
                    <label for="login">Používateľské meno alebo email</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Heslo</label>
                    <input type="password" id="pwd" name="pwd" required>
                </div>
                <button type="submit" class="btn btn-primary">Prihlásiť sa</button>
            </form>
            <p>Nemáte účet? <a href="signup.php">Zaregistrujte sa</a>.</p>
        </section>
    </main>
</body>
</html>
