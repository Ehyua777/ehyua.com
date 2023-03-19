<?php
require_once('src/models/datas.php');
require_once('src/models/DBFactory.php');
require_once('src/models/entities/ProgressBar.php');
require_once('src/models/managers/progressBar.php');

$webDevProgressBars    = getProgressBars("webDev");
$designProgressBars    = getProgressBars("design");
$mobileDevProgressBars = getProgressBars("mobileDev");

require('templates/homepage.php');
