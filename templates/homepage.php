<?php
ob_start();
include("body/header.php");
include("body/main.php");
include("body/footer.php");
$body = ob_get_clean();
