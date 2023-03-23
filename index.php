<?php
require_once('src/models/datas.php');
require_once('src/lib/DBFactory.php');
require_once('src/models/managers/ProgressBar.php');
require_once('src/models/repositories/progressBar.php');
require_once('src/models/managers/Configuration.php');

$config = new Configuration();

$webDevProgressBars    = getProgressBars("webDev");
$designProgressBars    = getProgressBars("design");
$mobileDevProgressBars = getProgressBars("mobileDev");

require('templates/homepage.php');
