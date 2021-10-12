const tabsContainer = document.querySelector(".beheer_tab-container");

//Script voor de diensten tabs

const openModal = function (e) {
    e.preventDefault();
    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
};
tabsContainer.addEventListener("click", function (e) {
    const clicked = e.target.closest(".beheer_tab");

    if (!clicked) return;

    console.log(typeof clicked);
    console.log(clicked.classList);

    if (clicked.classList.contains("beheer_tab-active")) {
        //Verwijder actieve classes
        clicked.classList.remove("beheer_tab-active");
    } else {
        //Activeer tab
        clicked.classList.add("beheer_tab-active");
    }

    //Activeer content veld
    document
        .querySelector(`.beheer_content--${clicked.dataset.tab}`)
        .classList.add("beheer_content-active");
});

/*
document.getElementsByClassName("btn beheer_tab").addEventListener("click", function()) {

}

document.getElementById("myBtn").addEventListener("click", beheerTabs);

function beheerTabs() {
  document.getElementById("demo").innerHTML = "Hello World";
}

*/

// Script voor het in-en-out fade van de diensten
