var url = window.location.href;
var page = url.split('/').pop();
if (page === 'email-success') {
    // Afficher la pop-up
    alert('Nous avons bien reçu votre e-mail. Merci.');
}
