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
    <?php require __DIR__ . '/zaciatok_konca/header.php'; ?>
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

    <?php require __DIR__ . '/zaciatok_konca/footer.php'; ?>
<?php require __DIR__ . '/zaciatok_konca/skripty.php'; ?>
</body>
</html>