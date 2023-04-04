<div class="col-12 col-md-4 text-md-end">
    <ul class="list-inline">
        <?php
        foreach ($links as $link) {
            // Faire quelque chose avec $link, qui contient un élément de $links à chaque itération
            // Par exemple, afficher l'URL du lien :
        ?>
            <li class="list-inline-item">
                <a href="<?= $link->url(); ?>" target="_blank">
                    <i data-bs-toggle="tooltip" class="<?= $link->class(); ?>" title="<?= $link->title(); ?>"></i>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>