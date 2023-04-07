<?php
class ExpertisesRepository
{
    public function getData($database)
    {
        $sql = "SELECT * FROM expertises_section_data";
        if (!$database) {
            die('La connexion à la base de données a échoué.');
        }
        try {
            $statement = $database->prepare($sql);
            $statement->execute() or die(print_r($database->errorInfo()));
            $statement->setFetchMode(
                PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
                'Expertise'
            );
            $result = $statement->fetch();
            $statement->closeCursor();
            return $result;
        } catch (Exception $err) {
            die('error[' . $err->getCode() . '] ' . $err->getMessage());
        }
    }
}
