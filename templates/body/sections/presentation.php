<section id="ehyua" class="my-5">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 col-md-6">
                <h1 class="fw-bold"><?= $owner->h1(); ?></h1>
                <h2 class="fw-light"><?= $owner->h2(); ?></h2>
                <button type="submit" class="btn btn-primary mt-5" onclick="window.location.href='#expertises'">
                    Mon expertise
                </button>
            </div>
            <div class="col"><img src="<?= $owner->photoUrl(); ?>" alt="Marcel Ehyua" class="w-100"></div>
        </div>
    </div>
</section>