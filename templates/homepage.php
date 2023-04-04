<script>
    if (window.location.hash === '#contact=success') {
        // Afficher la pop-up
        alert('Nous avons bien recu votre mail: Merci bien.');
    }
</script>
<?php
ob_start();
include("body/header.php");
include("body/main.php");
include("body/footer.php");
$body = ob_get_clean();
require('layout.php');
