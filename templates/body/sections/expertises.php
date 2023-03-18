<section id="expertises" class="bg-light py-5">
    <div class="container">
        <div class="row mt-5">
            <h2><?php echo $expertisesDatas['h2']; ?></h2>
            <h3><?php echo $expertisesDatas['h3']; ?></h3>
        </div>
        <?php
        include('expertises/web_dev.php');
        include('expertises/mobile_dev.php');
        include('expertises/design.php');
        ?>
    </div>
</section>