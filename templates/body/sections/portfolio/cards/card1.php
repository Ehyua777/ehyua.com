<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $card1->imageUrl(); ?>" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body">
            <?php include('card1_text.php'); ?>
            <!-------------------CANVAS 1 START---------------->
            <div class="offcanvas offcanvas-start h-100" tabindex="-1" id="infoProjet1" aria-labelledby="titleProject1">
                <?php include('offcanva1/title1.php'); ?>
                <div class="offcanvas-body">
                    <!------carousel 1 start-->
                    <?php include('offcanva1/carousel1.php'); ?>
                    <?php include('offcanva1/offcanva_other_text.php'); ?>
                    <!----------------CANVAS 1 END-------------------------->
                </div>
            </div>
        </div>
    </div>
</div>