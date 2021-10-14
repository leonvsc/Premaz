function validateEmail() {
    let email = document.getElementById("email");
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (pattern.test(email.value.toLowerCase())) {
        email.style.borderColor = "green";
    } else {
        email.style.borderColor = "red";
    }
}
