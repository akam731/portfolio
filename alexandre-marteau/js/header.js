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
});

/*
function scrollTo(sectionId) {
  var section = document.getElementById(sectionId);
  section.scrollIntoView({ behavior: 'smooth' });
}
*/