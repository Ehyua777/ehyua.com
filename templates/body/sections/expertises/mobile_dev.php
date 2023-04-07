<div class="row mt-5 gy-4">
    <div class="col-12 col-md-4">
        <img src="<?= $exp->mobileDevImageUrl(); ?>" alt="Mobile Dev" width="100%">
    </div>
    <div class="col-12 col-md-7 offset-md-1">
        <!--------------debut pb------->
        <?php
        foreach ($mobileDevProgressBars as $progressBar) {
            require('progress_bar_display.php');
        }
        ?>
        <!--------fin pb-------->
    </div>
</div>