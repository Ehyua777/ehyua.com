<?php
require_once('C:\Users\EHYUA\wmd\webapps\ehyua.com\src\lib\DBFactory.php');
require_once('C:\Users\EHYUA\wmd\webapps\ehyua.com\src\models\managers\MailConfiguration.manager.php');
function getConfigurationData(): MailConfigurationManager
{
    $database = DBFactory::getMysqlConnexionWithPDO();
    $getConfigurationDataQuery = 'SELECT * FROM smt_configuration_data WHERE access_provider = "selected"';
    if (!$database) {
        die('La connexion à la base de données a échoué.');
    }
    try {
        $statement = $database->prepare($getConfigurationDataQuery);
        $statement->execute();
    } catch (\Exception $err) {
        die('error[' . $err->getCode() . '] ' . $err->getMessage());
    }
    // $configDatas = [];
    while ($row = $statement->fetch()) {
        $configData = new MailConfigurationManager();
        $configData->setHost($row["host"]);
        $configData->setAuthentication($row['authentication']);
        $configData->setPort($row['port']);
        $configData->setUserName($row['username']);
        $configData->setPassword($row["password"]);
        $configData->setSecure($row['secure']);
        $configData->setRecipient($row['recipient']);
        $configData->setRecipientName($row['recipient_name']);

        //$configDatas[] = $configData;
    }
    var_dump($configData);
    print_r($configData);

    return $configData;
}
$test = getConfigurationData();
var_dump($test);
