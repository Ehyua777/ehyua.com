<header>
    <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
        <dvi class="container">
            <a class="navbar-brand text-uppercase fw-bold" href="index.html">
                <span class="bg-primary bg-gradient p-1 rounded-3 text-light">Ehyua</span>&nbsp;M'BIA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    foreach ($navBarDatas as $anchor => $link) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#<?php echo $anchor ?>"><?php echo $link ?></a>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </dvi>
    </nav>
</header>