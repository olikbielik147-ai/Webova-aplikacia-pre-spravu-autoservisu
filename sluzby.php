<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta značky-->
    <meta name="description" content="Služby - AutoServis Pro. Komplexné servisné služby, opravy motorov, diagnostika, klimatizácia, brzdy a mnoho ďalšieho.">
    <meta name="keywords" content="servis, opravy, diagnostika, motor, brzdy, klimatizácia, geometria, STK, cenník">
    <meta name="author" content="AutoServis Pro">
    
    <title>Služby - AutoServis Pro</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigačná lišta (navbar)-->
    <nav id="navbar" class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.html" class="logo">
                    <div class="logo-icon">🔧</div>
                    <span class="logo-text">AutoServis Pro</span>
                </a>

                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.html" class="nav-link">Domov</a></li>
                    <li><a href="o_nas.html" class="nav-link">O nás</a></li>
                    <li><a href="sluzby.html" class="nav-link">Služby</a></li>
                    <li><a href="kontakt.html" class="nav-link">Kontakt</a></li>
                </ul>

                <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <main>
        <!-- Úvodná sekcia stránky s nadpisom a popisom služieb -->
        <section class="page-header page-header-blue">
            <div class="container">
                <h1>Naše služby</h1>
                <p>Poskytujeme komplexné servisné služby pre všetky typy osobných a úžitkových vozidiel.</p>
            </div>
        </section>

            <!-- Obrázky (Images) -->
        <section class="service-image">
            <div class="container">
                <img src="img/Servis a údržba.jpg" alt="Náš autoservis" loading="lazy">
            </div>
        </section>

            <!-- Navigácia -->
            <div class="container-narrow">
                <div class="section-header">
                    <h2>Detailný prehľad služieb</h2>
                    <p>Kliknite na jednotlivé položky pre zobrazenie detailov</p>
                </div>

                <div class="accordion" id="servicesAccordion">
                </div>
            </div>
        </section>

        <section class="pricing-section">
            <div class="container">
                <div class="section-header">
                    <h2>Cenník základných služieb</h2>
                    <p>Orientačné ceny - presná cena závisí od modelu vozidla</p>
                </div>
                <div class="table-wrapper">
                    <table class="price-table">
                        <thead>
                            <tr>
                                <th>Služba</th>
                                <th>Cena</th>
                                <th>Čas</th>
                <!-- Banner s textom (Page header) -->
                <!--  Rôzne nadpisy (Headings) -->
                <section class="page-header page-header-blue">
                        </thead>
                        <tbody>
                            <tr>
                                <td>Výmena motorového oleja a filtra</td>
                                <td class="price">od 35 €</td>
                                <td>30 min</td>
                            </tr>
                <!-- Akordeón (Accordion) -->
                <section class="accordion-section">
                                <td>Malý servis (olej, filtre, kontrola)</td>
                                <td class="price">od 89 €</td>
                                <td>1 hod</td>
                            </tr>
                            <tr>
                                <td>Veľký servis (komplexný)</td>
                                <td class="price">od 189 €</td>
                                <td>2-3 hod</td>
                            </tr>
                            <tr>
                                <td>Elektronická diagnostika</td>
                                <td class="price">od 25 €</td>
                                <td>30 min</td>
                            </tr>
                            <tr>
                                <td>Výmena brzdových platničiek (náprava)</td>
                                <td class="price">od 65 €</td>
                                <td>1 hod</td>
                            </tr>
                            <!-- Tabuľka (Table) -->
                            <table class="price-table">
                                <td>Výmena brzdových kotúčov a platničiek</td>
                                <td class="price">od 150 €</td>
                                <td>2 hod</td>
                            </tr>
                            <tr>
                                <td>Servis klimatizácie</td>
                                <td class="price">od 45 €</td>
                                <td>45 min</td>
                            </tr>
                            <tr>
                                <td>Plnenie klimatizácie</td>
                                <td class="price">od 55 €</td>
                                <td>45 min</td>
                            </tr>
                            <tr>
                                <td>Výmena rozvodového remeňa</td>
                                <td class="price">od 250 €</td>
                                <td>4-6 hod</td>
                            </tr>
                            <tr>
                                <td>Geometria kolies</td>
                                <td class="price">od 30 €</td>
                                <td>30 min</td>
                            </tr>
                            <tr>
                                <td>Výmena autobatérie</td>
                                <td class="price">od 80 €</td>
                                <td>15 min</td>
                            </tr>
                            <tr>
                                <td>Príprava na STK</td>
                                <td class="price">od 50 €</td>
                                <td>1 hod</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="price-note">
                    <p><strong>Poznámka:</strong> Uvedené ceny sú orientačné a zahŕňajú len prácu. Náhradné diely sa účtujú osobitne. Presný cenový odhad vám poskytneme po diagnostike vozidla.</p>
                </div>
            </div>
        </section>
    </main>

    <!--Footer stránky-->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <div class="logo-icon">🔧</div>
                        <span>AutoServis Pro</span>
                    </div>
                    <p>Profesionálny autoservis s dlhoročnými skúsenosťami. Poskytujeme kvalitné služby za primerané ceny.</p>
                </div>

                <div class="footer-col">
                    <h4>Rýchle odkazy</h4>
                    <ul class="footer-links">
                        <li><a href="index.html">Domov</a></li>
                        <li><a href="o_nas.html">O nás</a></li>
                        <li><a href="sluzby.html">Služby</a></li>
                        <li><a href="kontakt.html">Kontakt</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Kontakt</h4>
                    <ul class="footer-contact">
                        <li>📍 Hlavná 123, 010 01 Žilina</li>
                        <li>📞 <a href="tel:+421901234567">+421 901 234 567</a></li>
                        <li>✉️ <a href="mailto:info@autoservispro.sk">info@autoservispro.sk</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Otváracie hodiny</h4>
                    <ul class="footer-hours">
                        <li>Po - Pia: 7:00 - 17:00</li>
                        <li>Ne: Zatvorené</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 AutoServis Pro. Všetky práva vyhradené.</p>
            </div>
        </div>
    </footer>
    <script src="js/app.js"></script>
</body>
</html>