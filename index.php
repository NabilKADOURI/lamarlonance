<?php

$title = "lamarlonance";
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

?>


<main>
    <!-- partie hero -->
<header >
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-7  col-md-12 text-center m-auto " >
                    <div class="waves">
                        <h1 class="mt-5 " >lamarlonance</h1>
                        <h1 class="mt-5 " >lamarlonance</h1>
                    </div>
                    <p class="danseur">DANSEUR CHOREGRAPHE LYON</p>

                    <a href="#prestations" class="btn " >VOIR LES PRESTATIONS</a>
                </div>

                <div class="col-lg-1 col-md-12">

                </div>

                <div class="col-lg-4 col-md-12 ">
                    <img class="" src="/lamarlonance/Image/fond-marlon.png"   alt="fond Marlon"  height="500px" width="500px" />
                </div>
            </div>
        </div>
</header>

<!-- section présentation-->
<section class="border-top border-bottom border-black border-3 bg mb-4">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 my-5 justify-content-center " data-aos="fade-right" >
                <img class="radius" src="/lamarlonance/Image/marlon-cours.png" alt="marlon cours de danse">
            </div>

            <div class="col-lg-6 col-md-12 m-auto" data-aos="fade-left">
                <h2 class="lobster fs-1"  >Marlon KAMBA</h2>
                <h3>Créateur de mouvement</h3> <br>
                <p class="text lh-lg" >Laissez-vous transporter par la magie de Marlon, champion du monde de bachata et artiste accompli ! <br> 

                    Marlon, danseur émérite certifié par le Ministère de la Culture de la République Dominicaine, vous invite à un voyage dans le monde vibrant de la bachata. Sa passion et son talent, conjugués à une expertise unique, vous offriront une expérience inoubliable. <br> 

                    Artiste pluridisciplinaire, Marlon ne se limite pas à un seul style. Sa maîtrise des danses Bachata, salsa, Afro, house, Moderne jazz lui permettent de créer des performances uniques et captivantes.</p>
            </div>
        </div>
    </div>
</section>

<!-- section préstations -->
<section>
    <div class="container" id="prestation">
        <div class="text-center mb-5 " data-aos="zoom-in" >
            <h2 class="title-or lobster" >Une passion : danser et faire danser</h2>
            <p>Vous avez un défi à relever ?  Marlon transpose son talent de danseur sur des projets imaginés et conçus sur mesure.</p>
        </div>

        <div class="row justify-content-center gap-5 flex-lg-wrap  ">
                <?php 
                
                $services = Service::getServiceAll();
               
                foreach ($services as $item) { 
                require 'template/services-item.php';
                }
                ?>
        </div>
    </div>
</section>

<!-- contact -->
<section class="bg-contact">
    <div class="contact">
        <h2 class="text-center" >Vous avez un spectacle ou un évènement à chorégraphier ?</h2>
    </div>
    <div>
        <a class="btn-contact" href=>Contactez-moi</a>
    </div>
</section>
    
</main>


<?php 

require_once __DIR__ . '/layout/footer.php';
