// Détection du clic pour le menu déroulant
document.addEventListener('DOMContentLoaded', function () {
    const menu = document.getElementById('menu');
    const headerNavA = document.getElementById('header_nav_a');
    const logo = document.getElementById('header_nav_logo');
    const nav = document.getElementById('header_nav');
    menu.addEventListener('change', function () {
        if (menu.checked) {
            headerNavA.style.maxHeight = headerNavA.scrollHeight + "px";
            logo.classList.add("nav_logo_hidden");
            nav.classList.add("nav_displayed");
        } else {
            headerNavA.style.maxHeight = null;
            setTimeout(function(){logo.classList.remove("nav_logo_hidden");}, 500);
            logo.classList.add("nav_logo_hidden");
            nav.classList.remove("nav_displayed");
        }
    });

    var links = document.querySelectorAll('.header_nav_a_link');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            menu.checked = !menu.checked;
            headerNavA.style.maxHeight = null;
            setTimeout(function(){logo.classList.remove("nav_logo_hidden");}, 500);
            logo.classList.add("nav_logo_hidden");
            nav.classList.remove("nav_displayed");
        });
    });

});

document.getElementById('header_nav_logo').addEventListener('click',function () {
    window.location.href = '../';
});