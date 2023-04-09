<?php
class CarouselRepository
{
    public function getData($db, $id)
    {
        $sql = 'SELECT * FROM carousel WHERE cardId =:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $query->execute() or die(print_r($db->errorInfo()));
        $query->setFetchMode(
            \PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,
            'Carousel'
        );
        $slideList = $query->fetchAll();
        return $slideList;
    }
}
