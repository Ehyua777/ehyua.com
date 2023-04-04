<?php
class LegalNoticeRepository
{
    public function getLegalNotice($db): LegalNoticeManager
    {
        $sql = 'SELECT * FROM legal_notice WHERE id=1';
        $query = $db->prepare($sql);
        $query->execute() or die(print_r($db->errorInfo()));
        $query->setFetchMode(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            'LegalNoticeManager'
        );
        return $query->fetch();
    }
}
