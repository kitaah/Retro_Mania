document.addEventListener("DOMContentLoaded", () => {
    let adminRegisterForm = document.getElementById("admin-register__form-content");
    let username = document.getElementById("admin-register-username");
    let invalidUsername = document.getElementsByClassName("xmark-form")[0];
    let submitBtn = document.getElementById("admin-register__submit");
    let password = document.getElementById("admin-register-password");
    let invalidPassword = document.getElementsByClassName("xmark-form")[1];
    let warningMessage = document.getElementById("admin-register-message");

    adminRegisterForm?.addEventListener("submit", (e) => {
        if (username.value == "") {
            username.style.borderColor = "#ff0000";
            invalidUsername.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            username.focus();
            e.preventDefault();
        }
        if (password.value == "") {
            password.style.borderColor = "#ff0000";
            invalidPassword.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            password.focus();
            e.preventDefault();
        }
    });
});
