<?php
class LinksRepository
{
    public function getLinks($db): array
    {
        $sql = 'SELECT * FROM links';
        $query = $db->query($sql);
        $query->setFetchMode(
            \PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,
            'Link'
        );
        $links = $query->fetchAll();
        $query->closeCursor();
        return $links;
    }
}
