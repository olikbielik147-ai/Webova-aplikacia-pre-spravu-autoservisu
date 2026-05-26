<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav id="navbar" class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.php" class="logo">
                    <div class="logo-icon">🔧</div>
                    <span class="logo-text">AutoServis Pro</span>
                </a>

                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.php" class="nav-link">Domov</a></li>
                    <li><a href="o_nas.php" class="nav-link">O nás</a></li>
                    <li><a href="sluzby.php" class="nav-link">Služby</a></li>
                    <li><a href="kontakt.php" class="nav-link">Kontakt</a></li>
                </ul>
                <?php if (!empty($_SESSION['useruid'])): ?>
                    <ul class="nav-user">
                        <?php if (!empty($_SESSION['is_admin'])): ?>
                            <li><a href="admin_services.php" class="nav-link">Admin</a></li>
                        <?php endif; ?>
                        <li><span class="nav-user-name">Ahoj, <?= htmlspecialchars($_SESSION['useruid'], ENT_QUOTES, 'UTF-8') ?></span></li>
                        <li><a href="logout.php" class="nav-link">Odhlásiť sa</a></li>
                    </ul>
                <?php else: ?>
                    <ul class="nav-buttons">
                        <li><a href="login.php" class="nav-link">Prihlásenie</a></li>
                        <li><a href="signup.php" class="nav-link">Registrácia</a></li>
                    </ul>
                <?php endif; ?>

                <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>
