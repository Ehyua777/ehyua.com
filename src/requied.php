<?php
require_once('models/config.php');
require_once('lib/DBFactory-1.2.php');
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
require_once('models/managers/Portfolio.manager.php');
require_once('models/repositories/Porfolio.repository.php');
require_once('models/managers/Card.manager.php');
require_once('models/repositories/Card.repository.php');
require_once('models/managers/Carousel.manager.php');
require_once('models/repositories/Carousels.repository.php');

//Connexion à la base de données
$factory = new DBFactory();
$dBCon = $factory->db();
//Objet de configuration
$config = new Configuration();

include('controllers/presentation.controller.php');
include('controllers/expertises.controller.php');
include('controllers/porfolio.controller.php');
include('controllers/contact.controller.php');
include('controllers/footer.controller.php');
