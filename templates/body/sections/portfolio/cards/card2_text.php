<h5 class="card-title"><?= $card2->subject(); ?></h5>
<p class="card-text">
<p class="card-text">
    <?php
    $content = truncateText($card2->content(), 50);
    echo $content; // affiche "Lorem ipsum dolor sit amet, consectetur..."     
    ?>
</p>
</p>
<a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoProjet2">Plus de détails</a>