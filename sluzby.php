<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <meta name="description" content="Služby - AutoServis Pro. Komplexné servisné služby, opravy motorov, diagnostika, klimatizácia, brzdy a mnoho ďalšieho.">
    <meta name="keywords" content="servis, opravy, diagnostika, motor, brzdy, klimatizácia, geometria, STK, cenník">
    <meta name="author" content="AutoServis Pro">
    
    <title>Služby - AutoServis Pro</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/zaciatok_konca/header.php'; ?>
    <main>
        <section class="page-header page-header-blue">
            <div class="container">
                <h1>Naše služby</h1>
                <p>Poskytujeme komplexné servisné služby pre všetky typy osobných a úžitkových vozidiel.</p>
            </div>
        </section>

        <section class="service-image">
            <div class="container">
                <img src="img/Servis a údržba.jpg" alt="Náš autoservis" loading="lazy">
            </div>
        </section>

        <section class="accordion-section">
            <div class="container-narrow">
                <div class="section-header">
                    <h2>Detailný prehľad služieb</h2>
                    <p>Kliknite na jednotlivé položky pre zobrazenie detailov</p>
                </div>

                <div class="accordion">
                    <details class="accordion-item" open>
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">🔧</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Pravidelný servis a údržba</h3>
                                <p class="accordion-subtitle">Komplexný servis podľa kilometrov alebo času</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content accordion-content-open">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Výmena motorového oleja a olejového filtra</li>
                                    <li>Kontrola a výmena vzduchového filtra</li>
                                    <li>Kontrola brzdovej sústavy</li>
                                    <li>Kontrola odpruženia a riadenia</li>
                                    <li>Kontrola svietidiel a signalizácie</li>
                                    <li>Kontrola hladín prevádzkových kvapalín</li>
                                </ul>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">📊</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Diagnostika a kontrola</h3>
                                <p class="accordion-subtitle">Elektronická diagnostika všetkých systémov vozidla</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Kompletná diagnostika riadiacich jednotiek</li>
                                    <li>Mazanie chybových hlášok</li>
                                    <li>Kontrola emisií</li>
                                    <li>Diagnostika motora a prevodovky</li>
                                    <li>Kontrola ABS a ESP systémov</li>
                                </ul>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">⚙️</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Opravy motora a prevodovky</h3>
                                <p class="accordion-subtitle">Špecializujeme sa na opravy motorov všetkých typov</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Výmena rozvodových súprav</li>
                                    <li>Opravy hlavy valcov</li>
                                    <li>Výmena tesnení a ucpávok</li>
                                    <li>Opravy systému vstrekovania</li>
                                    <li>Opravy chladenia motora</li>
                                </ul>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">❄️</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Klimatizácia</h3>
                                <p class="accordion-subtitle">Servis a opravy klimatizačných systémov</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Plnenie a kontrola chladiva</li>
                                    <li>Dezinfekcia klimatizácie ozónom</li>
                                    <li>Výmena kabínového filtra</li>
                                    <li>Opravy kompresorov</li>
                                </ul>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">⚡</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Elektrika a elektronika</h3>
                                <p class="accordion-subtitle">Riešenie problémov s elektrickou inštaláciou</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Diagnostika elektrických porúch</li>
                                    <li>Výmena a nabíjanie autobatérií</li>
                                    <li>Opravy generátorov a štartérov</li>
                                    <li>Opravy svetelnej techniky</li>
                                </ul>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">🚗</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Karoséria a lak</h3>
                                <p class="accordion-subtitle">Opravy poškodení karosérie a lakované práce</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Opravy poškodení z nehôd</li>
                                    <li>Bodové lakovanie</li>
                                    <li>Kompletné prelakovanie vozidla</li>
                                    <li>Odstránenie hrdze a antikorózna ochrana</li>
                                </ul>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">🛡️</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Brzdy a podvozok</h3>
                                <p class="accordion-subtitle">Servis brzdovej sústavy a podvozku</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Výmena brzdových kotúčov a platničiek</li>
                                    <li>Výmena brzdovej kvapaliny</li>
                                    <li>Opravy hydraulických vedení</li>
                                    <li>Geometria kolies</li>
                                </ul>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            <div class="accordion-icon-wrapper">
                                <span class="accordion-icon">✅</span>
                            </div>
                            <div class="accordion-title-wrapper">
                                <h3>Príprava na STK a EK</h3>
                                <p class="accordion-subtitle">Kompletná príprava vozidla na kontroly</p>
                            </div>
                            <span class="accordion-arrow">▼</span>
                        </summary>
                        <div class="accordion-content">
                            <div class="accordion-body">
                                <h4>Čo zahŕňa táto služba:</h4>
                                <ul>
                                    <li>Predkontrolná prehliadka vozidla</li>
                                    <li>Oprava závad</li>
                                    <li>Kontrola emisií</li>
                                    <li>Geometria svetlometov</li>
                                </ul>
                            </div>
                        </div>
                    </details>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Výmena motorového oleja a filtra</td>
                                <td class="price">od 35 €</td>
                                <td>30 min</td>
                            </tr>
                            <tr>
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
                            <tr>
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

    <?php require_once __DIR__ . '/zaciatok_konca/footer.php'; ?>
<?php require_once __DIR__ . '/zaciatok_konca/skripty.php'; ?>
</body>
</html>
