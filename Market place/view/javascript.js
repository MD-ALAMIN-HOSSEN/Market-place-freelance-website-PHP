function validateEmail() {
    var email = document.getElementById("email").value;
    var emailError = document.getElementById("emailError");

    // Check if the email is empty
    if (email.trim() === "") {
        emailError.textContent = "Email cannot be empty";
        return false;
    }

    // Check if the email contains '@' and '.'
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
        emailError.textContent = "Invalid email format";
        return false;
    }

    // Check if the '@' comes before the '.'
    if (email.indexOf('@') > email.indexOf('.')) {
        emailError.textContent = "Invalid email format";
        return false;
    }

    // Clear the error message if validation passes
    emailError.textContent = "";
    return true;
}

function validatePassword() {
    var password = document.getElementById("password").value;
    var passwordError = document.getElementById("PasswordError");

    // Check if the email is empty
    if (password.trim() === "") {
        passwordError.textContent = "password cannot be empty";
        return false;
    }

    // Clear the error message if validation passes
    passwordError.textContent = "";
    return true;
}


function validateSignUp1() {
    var clientRadio = document.getElementById("client");
    var freelancerRadio = document.getElementById("freelancer");
    var userTypeError = document.getElementById("userTypeError");

    // Check if at least one is selected
    if (!clientRadio.checked && !freelancerRadio.checked) {
        userTypeError.textContent = "Please select a user type";
        return false;
    }

    return true;
}