<?php
$portfolioRep = new PortfolioRepository();
$portfolio = $portfolioRep->getData($dBCon);

$cardRep = new CardRepository();
$card1 = $cardRep->getData($dBCon, 1);
$card2 = $cardRep->getData($dBCon, 2);
$card3 = $cardRep->getData($dBCon, 3);
$card4 = $cardRep->getData($dBCon, 4);

$carouselRep = new CarouselRepository();
$card1Carousel = $carouselRep->getData($dBCon, 1);
$card2Carousel = $carouselRep->getData($dBCon, 2);
$card3Carousel = $carouselRep->getData($dBCon, 3);
$card4Carousel = $carouselRep->getData($dBCon, 4);
