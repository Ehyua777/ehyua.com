<?php
class ContactRepository
{
    public function getContactData($database)
    {
        $sql = 'SELECT * FROM contact_section_data';
        if (!$database) {
            die('La connexion à la base de données a échoué.');
        }
        try {
            $statement = $database->prepare($sql);
            $statement->execute() or die(print_r($database->errorInfo()));
            $statement->setFetchMode(
                PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
                'Contact'
            );
            $result = $statement->fetch();
            $statement->closeCursor();
            return $result;
        } catch (Exception $err) {
            die('error[' . $err->getCode() . '] ' . $err->getMessage());
        }
    }
}
