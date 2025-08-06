window.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("register form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();


    const name = document.getElementById("name").value;
    const age = document.getElementById("age").value;
    const phone = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
    const insurance = document.getElementById("insurance").value;
    const policy = document.getElementById("policy").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    const nameRegex = /^[A-Za-z\s]+$/;
    const phoneRegex = /^\d{10}$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const policyRegex = /^[A-Za-z0-9]+$/;

    if (!nameRegex.test(name)) {
        alert("Please enter a valid name (letters and spaces only).");
        return;
    }
    if (isNaN(age) || age <18){
        alert("Please enter a valid age (18 or older).");
        return;
    }
    if (!phoneRegex.test(phone)) {
        alert("Please enter a valid phone number (10 digits).");
        return;
    }
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }
    if (!insurance || insurance === "Select provider") {
        alert("Please select an insurance provider.");
        return;
    }
    if (!policyRegex.test(policy)) {
        alert("Please enter a valid policy number.");
        return;
    }
    if (username.length <= 5) {
        alert("Please enter a username more than 5 characters.");
        return;
    }
    if (password.length <= 8) {
        alert("Please enter a password more than 8 characters.");
        return;
    }
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return;
    }
    else {
        alert("Username and password are valid.");
    }

    alert("Patient registered successfully!");
    

    this.submit();
});
});