<h5 class="card-title"><?= $card4->subject(); ?></h5>
<p class="card-text">
<p class="card-text">
    <?php
    $content = truncateText($card4->content(), 50);
    echo $content; // affiche "Lorem ipsum dolor sit amet, consectetur..."     
    ?>
</p>
</p>
<a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoProjet4">Plus de détails</a>