<div class="p-3 mb-3 bg-white">
    <div class="row align-items-center">
        <div class="col-5 col-sm-4 col-md-3 co-xl-2">
            <div class="d-flex align-items-center">
                <i class="<?= $progressBar->className . ' fa-2x me-3 text-primary'; ?> "></i>
                <p class="fw-bold m-0 text-uppercase"><?= $progressBar->skill ?></p>
            </div>
        </div>
        <div class="col">
            <div class="progress">
                <div <?= 'class="progress-bar w-' . $progressBar->level . '" role="progressbar" aria-valuenow="' . $progressBar->level . '" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" title="' . $progressBar->level . '%"' ?>></div>
            </div>
        </div>
    </div>
</div>