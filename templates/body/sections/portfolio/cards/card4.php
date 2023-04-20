<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $card4->imageUrl(); ?>" class="card-img-top" alt="..." style="height: 195px;">
        <div class="card-body">
            <?php include('card4_text.php'); ?>
            <!-------------------CANVAS 1 START---------------->
            <div class="offcanvas offcanvas-start h-100" tabindex="-1" id="infoProjet4" aria-labelledby="titleProject4">
                <?php include('offcanva4/title4.php'); ?>
                <div class="offcanvas-body">
                    <!------carousel 1 start-->
                    <?php include('offcanva4/carousel4.php'); ?>
                    <?php include('offcanva4/offcanva4_other_text.php'); ?>
                    <!----------------CANVAS 1 END-------------------------->
                </div>
            </div>
        </div>
    </div>
</div>