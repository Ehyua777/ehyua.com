<?php
class CardRepository
{
    public function getData($db, $id)
    {
        $sql = 'SELECT * FROM cards WHERE isActivated=1 AND id =:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $query->execute() or die(print_r($db->errorInfo()));
        $query->setFetchMode(
            \PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,
            'Card'
        );
        return $query->fetch();
    }
}
