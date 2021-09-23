let opacity = 0;
let intervalID = 0; 

function start() {
    const cycleImages = document.getElementById('cycleImages');  
    const imageDir = 'img/Cycle images/';                          
    const delayInSeconds = 1;    
    const images = ['achtergrond-afbeelding-1.1.jpg', 'afbeelding-alinea-1.jpg'];
    let num = 0;
    const changeImage = function() {
        const len = images.length;
        cycleImages.src = imageDir + images[num++];
        if (num == len) {
            num = 0;
        }
    };
    setInterval(changeImage, delayInSeconds * 2500);
};
window.onload = function(){
start();
}
/*function hide() {
    opacity = Number(window.getComputedStyle(cycleImages).getPropertyValue("opacity"));
        if (opacity > 0) {
            opacity = opacity - 0.1;
        }
        else {
            clearInterval(intervalID);
            cycleImages.style.opacity = opacity;
        }
}*/
