<?php
require_once('src/models/datas.php');
require_once('src/models/progress_bar.php');
require_once('src/models/db_factory.php');


$webDevProgressBars = getProgressBars("webDev");
$designProgressBars = getProgressBars("design");
$mobileDevProgressBars = getProgressBars("mobileDev");


require('templates/homepage.php');
