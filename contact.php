<?php
$title = "Contact";
require_once 'layout/header.php';
require_once 'layout/nav.php'; ?>

<main >
    <h1 class="text-center my-5 title-or">CONTACTEZ-MOI</h1>
    <div class="row justify-content-center gap-5 flex-lg-wrap  ">
                <?php 
                    require 'template/formulaire.php';
                ?>
        </div>
</main>

<?php require_once 'layout/footer.php';
