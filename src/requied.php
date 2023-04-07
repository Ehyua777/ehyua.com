<?php
require_once('models/datas.php');
require_once('lib/DBFactory.php');
require_once('models/managers/ProgressBar.manager.php');
require_once('models/repositories/progressBar.repository.php');
require_once('models/managers/Configuration.manager.php');
require_once('models/managers/Mail.manager.php');
require_once('models/repositories/MailConfiguration.repository.php');
require_once('models/managers/LegalNotice.manager.php');
require_once('models/repositories/LegalNotice.repository.php');
require_once('models/managers/Links.manager.php');
require_once('models/repositories/Links.repository.php');
require_once('models/managers/Presentation.manager.php');
require_once('models/repositories/Presentation.repository.php');
require_once('models/managers/Contact.manager.php');
require_once('models/repositories/Contact.repository.php');
require_once('models/managers/Expertise.manager.php');
require_once('models/repositories/Expersises.repository.php');

//Objet de configuration
$dBCon = DBFactory::getMysqlConnexionWithPDO();
$config = new Configuration();

include('controllers/presentation.controller.php');
include('controllers/expertises.controller.php');
include('controllers/contact.controller.php');
include('controllers/footer.controller.php');
