<?php
$webDevProgressBars = getProgressBars("webDev");
$designProgressBars = getProgressBars("design");
$mobileDevProgressBars = getProgressBars("mobileDev");

$expertisesDatas = new ExpertisesRepository();
$exp = $expertisesDatas->getData($dBCon);
