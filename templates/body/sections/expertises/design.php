<div class="row mt-5 gy-4">
    <div class="col-12 col-md-7">
        <!--------------debut pb------->
        <?php
        foreach ($designProgressBars as $progressBar) {
            require('progress_bar_display.php');
        }
        ?>
        <!--------fin pb-------->
    </div>
    <div class="col-12 col-md-4 offset-md-1">
        <img src="<?php echo $imagesDatas["design"] ?>" alt="Designe" width="100%">
    </div>
</div>