<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="O nás - AutoServis Pro. Rodinný autoservis s viac ako 15 rokmi skúseností. Certifikovaní mechanici a moderné vybavenie.">
    <meta name="keywords" content="o nás, autoservis žilina, história, tím mechanikov, certifikácie">
    <meta name="author" content="AutoServis Pro">
    
    <title>O nás - AutoServis Pro</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require __DIR__ . '/zaciatok_konca/header.php'; ?>
    <main>

        <section class="page-header">
            <div class="container">
                <h1>O nás</h1>
                <p>Sme rodinný autoservis s dlhoročnou tradíciou a moderným prístupom k opravám vozidiel.</p>
            </div>
        </section>

        <section class="about-story">
            <div class="container">
                <div class="two-col-layout">
                    <div class="col-text">
                        <h2>Naša história</h2>
                        <p>
                            AutoServis Pro bol založený v roku 2008 s víziou poskytovať kvalitné
                            servisné služby za férové ceny. Od začiatku sme sa zameriavali na
                            spokojnosť zákazníkov a budovanie dlhodobých vzťahov.
                        </p>
                        <p>
                            Za viac ako 15 rokov pôsobenia sme sa stali jedným z najdôveryhodnejších
                            autoservisov v regióne. Naši certifikovaní mechanici majú skúsenosti
                            so všetkými typmi vozidiel a neustále sa vzdelávajú v nových
                            technológiách.
                        </p>
                        <p>
                            Modernizovali sme naše zariadenia a investovali do najnovších
                            diagnostických nástrojov, aby sme dokázali poskytnúť služby na
                            najvyššej úrovni.
                        </p>
                    </div>
                    <div class="col-image">
                        <img src="img/Teamová práca.jpg" alt="Náš tím" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">🏆</div>
                        <h3 class="stat-number">15+</h3>
                        <p>Rokov skúseností</p>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">👥</div>
                        <h3 class="stat-number">5000+</h3>
                        <p>Spokojných zákazníkov</p>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⏱️</div>
                        <h3 class="stat-number">24h</h3>
                        <p>Odpovedáme do 24h</p>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">👍</div>
                        <h3 class="stat-number">98%</h3>
                        <p>Úspešnosť opráv</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="values">
            <div class="container">
                <div class="section-header">
                    <h2>Naše hodnoty</h2>
                    <p>Hodnoty, ktoré nás vedú pri každodennej práci</p>
                </div>

                <div class="values-grid">
                    <div class="value-card">
                        <h3>Kvalita</h3>
                        <p>Používame len originálne a kvalitné náhradné diely. Každá práca je vykonaná s maximálnou precíznosťou a odbornosťou.</p>
                    </div>
                    <div class="value-card">
                        <h3>Transparentnosť</h3>
                        <p>Vždy vám vysvetlíme, čo je potrebné opraviť a prečo. Žiadne skryté poplatky, len férové ceny.</p>
                    </div>
                    <div class="value-card">
                        <h3>Dôvera</h3>
                        <p>Budujeme dlhodobé vzťahy so zákazníkmi založené na vzájomnej dôvere a spokojnosti.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="certifications">
            <div class="container">
                <div class="section-header">
                    <h2>Certifikácie</h2>
                    <p>Sme certifikovaný servis s oprávnením pracovať na všetkých typoch vozidiel</p>
                </div>

                <div class="cert-box">
                    <div class="cert-grid">
                        <div class="cert-col">
                            <h4>Autorizované značky</h4>
                            <ul class="cert-list">
                                <li>✓ Volkswagen Group (VW, Audi, Škoda, SEAT)</li>
                                <li>✓ PSA Group (Peugeot, Citroën, Opel)</li>
                                <li>✓ Renault - Nissan</li>
                                <li>✓ Ford a Mazda</li>
                                <li>✓ Japonské značky (Toyota, Honda, Suzuki)</li>
                            </ul>
                        </div>
                        <div class="cert-col">
                            <h4>Certifikáty</h4>
                            <ul class="cert-list">
                                <li>✓ ISO 9001:2015 - Systém manažérstva kvality</li>
                                <li>✓ Oprávnenie STK a EK</li>
                                <li>✓ Certifikát klimatizačného technika</li>
                                <li>✓ Oprávnenie práce s LPG systémami</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/zaciatok_konca/footer.php'; ?>
<?php require __DIR__ . '/zaciatok_konca/skripty.php'; ?>
</body>
</html>
