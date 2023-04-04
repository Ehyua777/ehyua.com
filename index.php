<?php
require_once('src/models/datas.php');
require_once('src/lib/DBFactory.php');
require_once('src/models/managers/ProgressBar.manager.php');
require_once('src/models/repositories/progressBar.repository.php');
require_once('src/models/managers/Configuration.manager.php');
require_once('src/models/managers/Mail.manager.php');
require_once('src/models/repositories/MailConfiguration.repository.php');
require_once('src/models/managers/LegalNotice.manager.php');
require_once('src/models/repositories/LegalNotice.repository.php');
require_once('src/models/managers/Links.manager.php');
require_once('src/models/repositories/Links.repository.php');
require_once('src/models/managers/Presentation.manager.php');
require_once('src/models/repositories/Presentation.repository.php');


$dBCon = DBFactory::getMysqlConnexionWithPDO();
$config = new Configuration();

include('src/controllers/presentation.controller.php');
include('src/controllers/expertises.controller.php');
include('src/controllers/contact.controller.php');
include('src/controllers/footer.controller.php');

require('templates/homepage.php');
