<?php
require_once('src/models/datas.php');
require_once('src/models/repositories/DBFactory.php');
require_once('src/models/managers/ProgressBar.php');
require_once('src/models/repositories/progressBar.php');
require_once('src/controlers/Configuration.php');

$webDevProgressBars    = getProgressBars("webDev");
$designProgressBars    = getProgressBars("design");
$mobileDevProgressBars = getProgressBars("mobileDev");

require('templates/homepage.php');
