<?php
$lNR = new LegalNoticeRepository($dBCon);
$lNM = $lNR->getLegalNotice($dBCon);

//CONTROLLER OF SN LINKS//
$linkRep = new LinksRepository();
$links = $linkRep->getLinks($dBCon);
