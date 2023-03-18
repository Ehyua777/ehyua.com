<div class="row mt-5 gy-4">
    <div class="col-12 col-md-7">
        <!--------------debut progressbar------->
        <?php
        foreach ($webDevProgressBars as $progressBar) {
            require('progress_bar_display.php');
        }
        ?>
        <!--------fin pb------------------------>
    </div>
    <div class="col-12 offset-md-1 col-md-4">
        <img src="<?php echo $imagesDatas["webDev"] ?>" alt="Code PHP" width="100%">
    </div>
</div>