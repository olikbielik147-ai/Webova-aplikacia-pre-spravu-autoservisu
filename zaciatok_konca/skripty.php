<script>
document.addEventListener('DOMContentLoaded', function() {
    function setLayoutVars() {
        try {
            const root = document.documentElement;
            const header = document.querySelector('.navbar');
            const footer = document.querySelector('.footer');
            const headerHeight = header ? header.offsetHeight : 72;
            const footerHeight = footer ? footer.offsetHeight : 160;
            root.style.setProperty('--header-height', `${headerHeight}px`);
            root.style.setProperty('--footer-height', `${footerHeight}px`);
        } catch (e) {}
    }
    setLayoutVars();
    let resizeTimeout = null;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(setLayoutVars, 150);
    });
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    }

    const currentFile = (function(){
        const p = window.location.pathname.split('/').pop();
        return p === '' ? 'index.html' : p;
    })();
    document.querySelectorAll('.nav-link').forEach(a => {
        try {
            const href = a.getAttribute('href');
            if (!href) return;
            const last = href.split('/').pop();
            if (last === currentFile) {
                a.classList.add('active');
            } else {
                a.classList.remove('active');
            }
        } catch(e) {}
    });

    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 20) {
                navbar.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.15)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            }
        });
    }
});

const alertElement = document.getElementById('alert');
const alertClose = document.getElementById('alertClose');

if (alertClose && alertElement) {
    alertClose.addEventListener('click', function() {
        alertElement.classList.add('hidden');
    });
}

const carouselContainer = document.getElementById('carouselContainer');
const carouselPrev = document.getElementById('carouselPrev');
const carouselNext = document.getElementById('carouselNext');
const carouselIndicators = document.getElementById('carouselIndicators');

if (carouselContainer) {
    const slides = [
        { title: 'Servis a údržba', description: 'Pravidelný servis, výmena olejov a filtrov, kontrola brzd a pneumatík', icon: '🔧', image: 'img/Servis a údržba.jpg' },
        { title: 'Diagnostika', description: 'Komplexná elektronická diagnostika, kontrola motora a podvozku', icon: '📊', image: 'img/Diagnostika.jpg' },
        { title: 'Opravy motora', description: 'Generálne opravy, výmena rozvodov, opravy chladenia a vstrekovania', icon: '⚙️', image: 'img/Opravy motora.jpg' },
        { title: 'Klimatizácia', description: 'Servis klimatizácie, plnenie chladiva, dezinfekcia', icon: '❄️', image: 'img/Klimatizácia.jpg' },
        { title: 'Elektrika', description: 'Opravy elektrickej inštalácie, batérie, generátory, štartéry', icon: '⚡', image: 'img/Elektrika.jpg' },
        { title: 'Karoséria a lak', description: 'Opravy karosérie, lakované práce, odstránenie hrdze', icon: '🚗', image: 'img/Karoséria a lak.jpg' }
    ];

    let currentSlide = 0;

    slides.forEach((slide, index) => {
        const slideElement = document.createElement('div');
        slideElement.className = 'carousel-slide';
        slideElement.innerHTML = `
            <div class="carousel-text">
                <div class="carousel-icon">${slide.icon}</div>
                <h3>${slide.title}</h3>
                <p>${slide.description}</p>
            </div>
            <div class="carousel-image">
                <img src="${slide.image}" alt="${slide.title}" loading="lazy">
            </div>`;
        carouselContainer.appendChild(slideElement);
    });

    if (carouselIndicators) {
        slides.forEach((_, index) => {
            const indicator = document.createElement('button');
            indicator.className = 'indicator';
            indicator.setAttribute('aria-label', `Slide ${index + 1}`);
            if (index === 0) indicator.classList.add('active');
            indicator.addEventListener('click', () => goToSlide(index));
            carouselIndicators.appendChild(indicator);
        });
    }

    function updateCarousel() {
        const offset = -currentSlide * 100;
        carouselContainer.style.transform = `translateX(${offset}%)`;

        const indicators = document.querySelectorAll('.indicator');
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        updateCarousel();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateCarousel();
    }

    function goToSlide(index) {
        currentSlide = index;
        updateCarousel();
    }

    if (carouselNext) carouselNext.addEventListener('click', nextSlide);
    if (carouselPrev) carouselPrev.addEventListener('click', prevSlide);

    setInterval(nextSlide, 5000);
}

const accordion = document.getElementById('servicesAccordion');

if (accordion) {
    const services = [
        { title: 'Pravidelný servis a údržba', description: 'Komplexný servis podľa kilometrov alebo času', icon: '🔧', details: ['Výmena motorového oleja a olejového filtra','Kontrola a výmena vzduchového filtra','Kontrola brzdovej sústavy','Kontrola odpruženia a riadenia','Kontrola svietidiel a signalizácie','Kontrola hladín prevádzkových kvapalín','Reset servisného intervalu'] },
        { title: 'Diagnostika a kontrola', description: 'Elektronická diagnostika všetkých systémov vozidla', icon: '📊', details: ['Kompletná diagnostika riadiacich jednotiek','Mazanie chybových hlášok','Kontrola emisií','Diagnostika motora a prevodovky','Kontrola ABS a ESP systémov','Diagnostika klimatizácie','Vypracovanie protokolu o stave vozidla'] },
        { title: 'Opravy motora a prevodovky', description: 'Špecializujeme sa na opravy motorov všetkých typov', icon: '⚙️', details: ['Výmena rozvodových súprav','Opravy hlavy valcov','Výmena tesnení a ucpávok','Opravy systému vstrekovania','Opravy chladenia motora','Generálne opravy motorov','Opravy automatických prevodoviek'] },
        { title: 'Klimatizácia', description: 'Servis a opravy klimatizačných systémov', icon: '❄️', details: ['Plnenie a kontrola chladiva','Dezinfekcia klimatizácie ozónom','Výmena kabínového filtra','Opravy kompresorov','Vyhľadávanie netesností','Výmena kondenzátorov a výparníkov'] },
        { title: 'Elektrika a elektronika', description: 'Riešenie problémov s elektrickou inštaláciou', icon: '⚡', details: ['Diagnostika elektrických porúch','Výmena a nabíjanie autobatérií','Opravy generátorov a štartérov','Opravy svetelnej techniky','Montáž parkovacích senzorov a kamier','Montáž alarm a imobilizérov'] },
        { title: 'Karoséria a lak', description: 'Opravy poškodení karosérie a lakované práce', icon: '🚗', details: ['Opravy poškodení z nehôd','Bodové lakovanie','Kompletné prelakovanie vozidla','Opravy plastových nárazníkov','Odstránenie hrdze a antikorózna ochrana','Leštenie a obnova laku'] },
        { title: 'Brzdy a podvozok', description: 'Servis brzdovej sústavy a podvozku', icon: '🛡️', details: ['Výmena brzdových kotúčov a platničiek','Výmena brzdovej kvapaliny','Opravy hydraulických vedení','Výmena tlmičov a pružín','Opravy riadenia','Geometria kolies'] },
        { title: 'Príprava na STK a EK', description: 'Kompletná príprava vozidla na kontroly', icon: '✅', details: ['Predkontrolná prehliadka vozidla','Oprava závad','Kontrola emisií','Geometria svetlometov','Doplnenie prevádzkových kvapalín','Zabezpečenie protokolu o opravách'] }
    ];

    services.forEach((service, index) => {
        const item = document.createElement('div');
        item.className = 'accordion-item';

        const detailsList = service.details.map(detail => `<li>${detail}</li>`).join('');

        item.innerHTML = `
            <button class="accordion-header" aria-expanded="false" data-index="${index}">
                <div class="accordion-icon-wrapper">
                    <span class="accordion-icon">${service.icon}</span>
                </div>
                <div class="accordion-title-wrapper">
                    <h3>${service.title}</h3>
                    <p class="accordion-subtitle">${service.description}</p>
                </div>
                <span class="accordion-arrow">▼</span>
            </button>
            <div class="accordion-content">
                <div class="accordion-body">
                    <h4>Čo zahŕňa táto služba:</h4>
                    <ul>${detailsList}</ul>
                </div>
            </div>`;
        accordion.appendChild(item);
    });

    const accordionHeaders = document.querySelectorAll('.accordion-header');
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isActive = this.classList.contains('active');

            accordionHeaders.forEach(h => {
                h.classList.remove('active');
                h.nextElementSibling.classList.remove('active');
                h.setAttribute('aria-expanded', 'false');
            });

            if (!isActive) {
                this.classList.add('active');
                content.classList.add('active');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });

    if (accordionHeaders.length > 0) {
        accordionHeaders[0].click();
    }
}

const contactForm = document.getElementById('contactForm');

if (contactForm) {
    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    function showError(inputId, message) {
        const input = document.getElementById(inputId);
        const errorElement = document.getElementById(inputId + 'Error');

        if (input) input.classList.add('error');
        if (errorElement) errorElement.textContent = message;
    }

    function clearError(inputId) {
        const input = document.getElementById(inputId);
        const errorElement = document.getElementById(inputId + 'Error');

        if (input) input.classList.remove('error');
        if (errorElement) errorElement.textContent = '';
    }

    const formInputs = contactForm.querySelectorAll('input, textarea');
    formInputs.forEach(input => {
        input.addEventListener('input', function() {
            const id = this.type === 'checkbox' ? 'consent' : this.id;
            clearError(id);
        });
    });

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        let isValid = true;

        const name = document.getElementById('name').value.trim();
        if (!name) {
            showError('name', 'Meno je povinné');
            isValid = false;
        } else if (name.length < 2) {
            showError('name', 'Meno musí mať minimálne 2 znaky');
            isValid = false;
        } else {
            clearError('name');
        }

        const email = document.getElementById('email').value.trim();
        if (!email) {
            showError('email', 'Email je povinný');
            isValid = false;
        } else if (!validateEmail(email)) {
            showError('email', 'Zadajte platnú emailovú adresu');
            isValid = false;
        } else {
            clearError('email');
        }

        const message = document.getElementById('message').value.trim();
        if (!message) {
            showError('message', 'Správa je povinná');
            isValid = false;
        } else if (message.length < 10) {
            showError('message', 'Správa musí mať minimálne 10 znakov');
            isValid = false;
        } else {
            clearError('message');
        }

        const consent = document.getElementById('consent').checked;
        if (!consent) {
            showError('consent', 'Musíte súhlasiť so spracovaním osobných údajov');
            isValid = false;
        } else {
            clearError('consent');
        }

        if (isValid) {
            console.log('Formulár odoslaný:', {
                name: name,
                email: email,
                phone: document.getElementById('phone').value,
                message: message
            });

            window.location.href = 'dakujeme.html';
        }
    });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href.length > 1) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                observer.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

console.log('AutoServis Pro - Webstránka úspešne načítaná! 🔧');
</script>