<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $card2->imageUrl(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <?php include('card2_text.php'); ?>
            <!-------------------CANVAS 1 START---------------->
            <div class="offcanvas offcanvas-start h-100" tabindex="-1" id="infoProjet2" aria-labelledby="titleProject2">
                <?php include('offcanva2\title2.php'); ?>
                <div class="offcanvas-body">
                    <!------carousel 1 start-->
                    <?php include('offcanva2\carousel2.php'); ?>
                    <?php include('offcanva2\offcanva2_other_text.php'); ?>
                    <!----------------CANVAS 1 END-------------------------->
                </div>
            </div>
        </div>
    </div>
</div>