function validateLogin() {
    const user = document.getElementById("username").value.trim();
    const pass = document.getElementById("password").value.trim();

    if (user === "" || pass === "") {
        alert("Please enter all details");
        return false;
    }

    return true; // allow form submit
}