/*document.forms["contact"].addEventListener("submit", function (e) {

    var errorMessage;
    var inputs = this;

    function validateEmail(email) {
        const emailRegex = /^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9_\.\-]+)\.([a-zA-Z]{2,5})$/;
        return emailRegex.test(email);
    }

    //Traitement au cas par cas
    if (!validateEmail(inputs["email"].value)) {
        errorMessage = "Vous n'avez pas renseigné le bon email";
    }

    if (errorMessage) {
        e.preventDefault();
        document.getElementById("errorMessage").innerHTML = errorMessage;
        return false;
    }
    else {
        document.getElementById("send").addEventListener("submit", function (e) {
            e.preventDefault();
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                console.log(this);
                /*if (this.readyState == 4 && this.status == 200) {
                    console.log(this.response);
                }*/
//};
//xhr.open("GET", "index.php", true);
//xhr.send;

//return false;
//});
//}




/* for (let index = 0; index < inputs.length; index++) {
     if (!inputs[index].value) {
         errorMessage = "Veilez renseigner tous les champs";
     }
     //const element = array[index];
 
 }
*/

/*var firstName = document.getElementById('firstName');
var lastName = document.getElementById('lastName');
var email = document.getElementById('email');
var subject = document.getElementById('subject');
var mailBody = document.getElementById('mailBody');

if (!mailBody.value) {
    errorMessage = "Donnez nous des details sur l'objet de votre mail svp";
}
if (!subject.value) {
    error = "Veillez nous fournir l'objet de votre message SVP";
}

if (!email.value) {
    errorMessage = "Veillez renseigner vtre email SVP.";
}
if (!lastName.value) {
    errorMessage = "Veillez renseigner votre nom SVP.";
}
if (!firstName.value) {
    errorMessage = "Veillez renseigner vos prénom SVP.";
}*/

//});

document.getElementById("send").addEventListener("submit", function (e) {
    e.preventDefault();
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        console.log(this);
        /*if (this.readyState == 4 && this.status == 200) {
            console.log(this.response);
        }*/
    };
    xhr.open("GET", "index.php", true);
    xhr.send();

    return false;
});