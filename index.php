<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta značky-->
    <meta name="description" content="AutoServis Pro - profesionálny autoservis v Žiline. Ponúkame komplexné servisné služby, opravy motorov, diagnostiku, servis klimatizácie a mnoho ďalšieho. Férové ceny a záruka kvality.">
    <meta name="keywords" content="autoservis, oprava áut, servis vozidiel, Žilina, diagnostika, oprava motora, výmena oleja, STK, EK, klimatizácia, brzdy, geometria">
    <meta name="author" content="AutoServis Pro">
    
    <title>AutoServis Pro - Profesionálny autoservis Žilina</title>
    
    <!--prepojenie CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require __DIR__ . '/zaciatok_konca/header.php'; ?>
    <div class="alert" id="alert">
        <div class="container">
            <div class="alert-content">
                <span class="alert-icon">ℹ️</span>
                <p class="alert-text">
                    <strong>AKCIA!</strong> Bezplatná diagnostika pri objednávke servisu do 15.12.2025
                </p>
                <!-- Tlačidlo na zatvorenie upozornenia -->
                <button class="alert-close" id="alertClose" aria-label="Zavrieť upozornenie">✕</button>
            </div>
        </div>
    </div>

    <main>
        <!--Banner s textom-->
        <!-- Rôzne nadpisy (Headings) -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Váš spoľahlivý autoservis</h1>
                        <h2>Profesionálna starostlivosť o vaše vozidlo</h2>
                        <p>
                            Poskytujeme komplexné servisné služby pre všetky typy vozidiel.
                            Náš tím skúsených mechanikov sa postará o váš automobil s maximálnou
                            starostlivosťou a odbornosťou.
                        </p>
                        <!-- Tlačidlo s preklikom na inú stránku (styled link) -->
                        <a href="kontakt.php" class="btn btn-primary">
                            Objednať sa →   
                        </a>
                    </div>
                    <!-- Obrázky (Images) -->
                    <div class="hero-image">
                        <img src="img/Mechanik pri práci.jpg" alt="Mechanik pri práci" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <!-- Rôzne nadpisy (Headings) -->
                <div class="section-header">
                    <h2>Prečo si vybrať nás?</h2>
                    <p>Sme autoservis, ktorému môžete dôverovať. Naša dlhoročná prax a spokojní zákazníci hovoria za nás.</p>
                </div>

                <div class="features-grid">
                    <!--Zoznam (Lists) -->
                    <div class="feature-card">
                        <div class="feature-icon">✓</div>
                        <h3>Skúsený tím</h3>
                        <ul class="feature-list">
                            <li>Certifikovaní mechanici</li>
                            <li>15+ rokov skúseností</li>
                            <li>Pravidelné školenia</li>
                            <li>Moderné vybavenie</li>
                        </ul>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">✓</div>
                        <h3>Kvalita a záruka</h3>
                        <ul class="feature-list">
                            <li>Originálne náhradné diely</li>
                            <li>Záruka na všetky práce</li>
                            <li>Transparentné ceny</li>
                            <li>Bezplatná diagnostika</li>
                        </ul>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">✓</div>
                        <h3>Pohodlie</h3>
                        <ul class="feature-list">
                            <li>Online objednávanie</li>
                            <li>Bezplatné parkovanie</li>
                            <li>Wi-Fi v čakárni</li>
                            <li>Náhradné vozidlo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Slideshow (Carousel) -->
        <section class="carousel-section">
            <div class="container">
                <div class="section-header">
                    <h2>Naše služby</h2>
                    <p>Ponúkame široký rozsah servisných služieb pre váš automobil</p>
                </div>

                <div class="carousel">
                    <div class="carousel-container" id="carouselContainer">
                    </div>
                    <button class="carousel-btn carousel-prev" id="carouselPrev" aria-label="Predchádzajúci slide">‹</button>
                    <button class="carousel-btn carousel-next" id="carouselNext" aria-label="Nasledujúci slide">›</button>
                    <div class="carousel-indicators" id="carouselIndicators">
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="container">
                <div class="section-header">
                    <h2>Spokojní zákazníci</h2>
                    <p>Prečítajte si, čo hovoria naši klienti</p>
                </div>

                <div class="reviews-grid">
                    <div class="review-card">
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                        <p class="review-text">"Výborný servis, profesionálny prístup. Auto opravili rýchlo a za dobrú cenu. Určite odporúčam!"</p>
                        <p class="review-author">Peter Kováč</p>
                    </div>
                    <div class="review-card">
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                        <p class="review-text">"Konečne autoservis, ktorému môžem dôverovať. Všetko mi vysvetlili a poradili. Super!"</p>
                        <p class="review-author">Mária Nováková</p>
                    </div>
                    <div class="review-card">
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                        <p class="review-text">"Chodím sem už tretí rok a vždy som spokojný. Ceny sú férové a práca kvalitná."</p>
                        <p class="review-author">Ján Horváth</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="container">
                <h2>Potrebujete servis?</h2>
                <p>Objednajte sa ešte dnes a využite našu bezplatnú diagnostiku</p>
                <!-- Tlačidlo s preklikom na inú stránku (styled link) -->
                <a href="kontakt.php" class="btn btn-white">Kontaktovať nás →</a>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/zaciatok_konca/footer.php'; ?>
<?php require __DIR__ . '/zaciatok_konca/skripty.php'; ?>
</body>

</html>