<?php
class MailConfigurationRepository
{
    public function getConfigurationData($database, $selected)
    {
        $getConfigurationDataQuery = 'SELECT * FROM smt_configuration_data WHERE accessProvider =:accessProvider';
        if (!$database) {
            die('La connexion à la base de données a échoué.');
        }
        try {
            $statement = $database->prepare($getConfigurationDataQuery);
            $statement->bindValue(':accessProvider', (string) $selected, PDO::PARAM_INT);
            $statement->execute() or die(print_r($database->errorInfo()));
            $statement->setFetchMode(
                PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
                'MailConfigurationManager'
            );
            $result = $statement->fetch();
            $statement->closeCursor();
            return $result;
        } catch (Exception $err) {
            die('error[' . $err->getCode() . '] ' . $err->getMessage());
        }
    }
}
