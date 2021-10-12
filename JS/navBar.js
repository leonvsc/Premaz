// Opening the menu
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav_links");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navLinks.classList.toggle("active");
}

// Closing the menu
const navLink = document.querySelectorAll(".nav_link");

navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navLinks.classList.remove("active");
}
