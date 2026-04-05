<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta značky-->
    <meta name="description" content="Kontakt - AutoServis Pro. Kontaktujte nás na +421 901 234 567 alebo info@autoservispro.sk. Nájdete nás na Hlavná 123, Žilina.">
    <meta name="keywords" content="kontakt, autoservis žilina, telefón, email, adresa, objednávka, formulár">
    <meta name="author" content="AutoServis Pro">
    
    <title>Kontakt - AutoServis Pro</title>
    
    <!-- prepojenie css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Navigácia (Navbar) -->
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
        <!--Banner s textom (Page header) -->
        <!-- Rôzne nadpisy (Headings) -->
        <section class="page-header page-header-blue">
            <div class="container">
                <h1>Kontakt</h1>
                <p>Máte otázky? Potrebujete poradiť? Kontaktujte nás, radi vám pomôžeme.</p>
            </div>
        </section>

        <!-- Sekcia s kontaktnými informáciami a formulárom -->
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

                        <!-- Odkaz na email a telefón (mailto / tel) -->
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

                        <!--Obrázky (Images) -->
                        <div class="contact-image">
                            <img src="img/oprava vozidla kontakt.jpg" alt="AutoServis Pro" loading="lazy">
                        </div>
                    </div>
                    <div class="contact-form-wrapper">
                        <h2>Napíšte nám</h2>
                        
                        <!--Formulár (Form) -->
                        <form id="contactForm" class="contact-form" novalidate>
                            <!-- Pole pre meno a priezvisko -->
                            <div class="form-group">
                                <label for="name">Meno a priezvisko <span class="required">*</span></label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    placeholder="Ján Novák"
                                    required
                                >
                                <span class="error-message" id="nameError"></span>
                            </div>

                            <!-- Pole pre emailovú adresu -->
                            <div class="form-group">
                                <label for="email">Email <span class="required">*</span></label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    placeholder="jan.novak@example.com"
                                    required
                                >
                                <span class="error-message" id="emailError"></span>
                            </div>

                            <!-- Pole pre telefónne číslo (voliteľné) -->
                            <div class="form-group">
                                <label for="phone">Telefón</label>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone" 
                                    placeholder="+421 901 234 567"
                                >
                            </div>

                            <!-- Pole pre správu -->
                            <div class="form-group">
                                <label for="message">Vaša správa <span class="required">*</span></label>
                                <textarea 
                                    id="message" 
                                    name="message" 
                                    rows="5" 
                                    placeholder="Napíšte nám vašu správu alebo otázku..."
                                    required
                                ></textarea>
                                <span class="error-message" id="messageError"></span>
                            </div>

                            <!-- checkbox -->
                            <div class="form-group checkbox-group">
                                <label class="checkbox-label">
                                    <input 
                                        type="checkbox" 
                                        id="consent" 
                                        name="consent"
                                        required
                                    >
                                    <span>
                                        Súhlasím so spracovaním osobných údajov za účelom vybavenia mojej požiadavky. 
                                        Vaše údaje nebudú poskytnuté tretím stranám a budú použité len na komunikáciu s vami.
                                        <span class="required">*</span>
                                    </span>
                                </label>
                                <span class="error-message" id="consentError"></span>
                            </div>

                            <!-- Tlačidlo na odoslanie formulára -->
                            <button type="submit" class="btn btn-primary btn-full">
                                Odoslať správu →
                            </button>

                            <p class="form-note"><span class="required">*</span> Povinné polia</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
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
                        <li>So: 8:00 - 12:00</li>
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