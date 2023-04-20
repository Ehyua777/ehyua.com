<h5 class="card-title"><?= $card1->subject(); ?></h5>
<p class="card-text">
    <?php
    $content = truncateText($card1->content(), 50);
    echo $content; // affiche "Lorem ipsum dolor sit amet, consectetur..."     
    ?>
</p>
<a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoProjet1">Plus de détails</a>