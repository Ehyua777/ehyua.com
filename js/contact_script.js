document.forms["contact"].addEventListener("submit", function (e) {

    var errorMessage;
    var inputs = this;

    function validateEmail(email) {
        const emailRegex = /^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9_\.\-]+)\.([a-zA-Z]{2,5})$/;
        return emailRegex.test(email);
    }

    //Traitement au cas par cas
    if (!validateEmail(inputs["email"].value)) {
        errorMessage = "Votre email n'est pas au bon format.";
    }

    if (errorMessage) {
        e.preventDefault();
        document.getElementById("errorMessage").innerHTML = errorMessage;
        return false;
    }
});