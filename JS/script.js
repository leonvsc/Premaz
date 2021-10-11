let opacity = 0;

function start() {
    const cycleImages = document.getElementById("cycleImages");
    const imageDir = "img/Cycle images/";
    const delayInSeconds = 1;
    const images = ["img-1.jpg", "img-2.jpg", "img-3.jpg"];
    let num = 0;
    const changeImage = function () {
        const len = images.length;
        cycleImages.src = imageDir + images[num++];
        if (num === len) {
            num = 0;
        }
    };
    setInterval(changeImage, delayInSeconds * 10000);
}
window.onload = function () {
    start();
};

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav_links");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navLinks.classList.toggle("active");
}
