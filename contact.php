<?php
$title = "Contact";
require_once 'layout/header.php';
require_once 'layout/nav.php'; ?>

<main >
    <div class="row justify-content-center gap-5 flex-lg-wrap  ">
                <?php 
                    require 'template/formulaire.php';
                ?>
        </div>
</main>

<?php require_once 'layout/footer.php';
