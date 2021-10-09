let opacity = 0;
let intervalID = 0;

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
    setInterval(changeImage, delayInSeconds * 3500);
}
window.onload = function () {
    start();
};