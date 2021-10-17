const tabsContainer = document.querySelector(".beheer_tab-container");
const beheerContainer = document.querySelector(".beheer_content-container");
const checkpoint = 900;

// Script voor het in-faden van de diensten afbeeldingen met alinea's

/*
window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= checkpoint) {
        var fade = document.querySelector(".front");
        fade.classList.add("visible"); //visible - werkt
        setTimeout(function () {
            fade.classList.add("selectable"); //selectable
        }, checkpoint);
    }
});
*/

// Script voor het activeren van de buttons van 'beheer'

tabsContainer.addEventListener("click", function (e) {
    // Haal alle buttons op
    let allButtons = document.getElementsByClassName("beheer_tab");

    // Looped door alle buttons heen en zet ze allemaal 'uit'
    for (let i = 0; i < allButtons.length; i++) {
        allButtons[i].classList.remove("beheer_tab-active");
    }

    let clicked = e.target.closest(".beheer_tab");

    if (!clicked) return;

    // Zet meteen de button die je hebt aangeclicked weer 'aan'
    clicked.classList.add("beheer_tab-active");

    let dataTab = clicked.getAttribute("data-tab");

    let allContent = document.getElementsByClassName("beheer_content");
    let content = document.getElementsByClassName("beheer_content-" + dataTab);

    // Looped door alle content heen en zet ze allemaal 'uit'
    for (let i = 0; i < allContent.length; i++) {
        allContent[i].classList.remove("beheer_content-active");
    }

    content[0].classList.add("beheer_content-active");
});
