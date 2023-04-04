<div class="modal fade" id="mentionsLegales" tabindex="-1" aria-labelledby="exempleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $lNM->title(); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5><?= $lNM->subtitle() . ' ' . '@' . $lNM->year(); ?></h5>
                <p>
                    <?= $lNM->content(); ?>
                </p>
            </div>
        </div>
    </div>
</div>