<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $card3->imageUrl(); ?>" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body">
            <?php include('card3_text.php'); ?>
            <!-------------------CANVAS 1 START---------------->
            <div class="offcanvas offcanvas-start h-100" tabindex="-1" id="infoProjet3" aria-labelledby="titleProject3">
                <?php include('offcanva3/title3.php'); ?>
                <div class="offcanvas-body">
                    <!------carousel 1 start-->
                    <?php include('offcanva3/carousel3.php'); ?>
                    <?php include('offcanva3/offcanva3_other_text.php'); ?>
                    <!----------------CANVAS 1 END-------------------------->
                </div>
            </div>
        </div>
    </div>
</div>