document.addEventListener("DOMContentLoaded", function () {
    var hamburger = document.getElementById("hamburger");
    var navMenu = document.getElementById("navMenu");
    if (hamburger && navMenu) {
        hamburger.addEventListener("click", function () {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });
    }

    document.querySelectorAll(".accordion-item > summary").forEach(function (summary) {
        summary.addEventListener("click", function (event) {
            event.preventDefault();
            var details = summary.parentElement;
            if (details && details.tagName.toLowerCase() === "details") {
                details.open = !details.open;
            }
        });
    });
});
