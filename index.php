<?php

$title = "lamarlonance";
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

?>


<main>
    <!-- partie hero -->
    <header>
        <div class="container">
            <div class="row justify-content-center align-items-center my-3">
                <div class="col-lg-8 col-md-6 col-12 text-center my-4 order-sm-2 order-lg-0">
                    <div class="mb-5">
                        <h1 class="title-or display-1">Lamarlonance</h1>
                    </div>
                    <div class="">
                        <p>DANSEUR CHOREGRAPHE LYON</p>
                    </div>

                    <div class="my-5">
                        <a href="#prestations" class="custom-button ">VOIR LES PRESTATIONS</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center order-sm-1 ">
                    <img class="img-fluid" src="/lamarlonance/Image/fond-marlon.png" alt="fond Marlon" height="400px" width="400px" />
                </div>
            </div>
        </div>
    </header>

    <!-- section présentation-->
    <section class="border-top border-bottom border-black border-3 bg mb-4">
        <div class="container">
            <div class="row py-5 justify-content-between ">
                <div class="col-lg-5 col-12 order-2 order-lg-0 " data-aos="fade-right">
                    <img class="radius img-fluid w-100" src="/lamarlonance/Image/marlon-cours.png" alt="marlon cours de danse">
                </div>

                <div class="col-lg-6 col-12 text-center text-lg-start order-1" data-aos="fade-left p-2">
                    <h2 class=" display-4 pb-3">Marlon KAMBA</h2>
                    <h3>Créateur de mouvement</h3>
                    <p class="text lh-lg fs-6 fs-md-5 fs-lg-4">Laissez-vous transporter par la magie de Marlon, champion du monde de bachata et artiste accompli ! <br>

                        Marlon, danseur émérite certifié par le Ministère de la Culture de la République Dominicaine, vous invite à un voyage dans le monde vibrant de la bachata. Sa passion et son talent, conjugués à une expertise unique, vous offriront une expérience inoubliable. <br>

                        Artiste pluridisciplinaire, Marlon ne se limite pas à un seul style. Sa maîtrise des danses Bachata, salsa, Afro, house, Moderne jazz lui permettent de créer des performances uniques et captivantes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section préstations -->
    <section>
        <div class="container" id="prestation">
            <div class="text-center fs-lg-5 fs-md-6 fs-none my-5 " data-aos="zoom-in">
                <h2 class="title-or display-5 pb-3">Une passion : danser et faire danser</h2>
                <p><b>Vous avez un défi à relever ? Marlon transpose son talent de danseur sur des projets imaginés et conçus sur mesure.</b></p>
            </div>

            <div class="row justify-content-center  flex-lg-wrap ">

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
    <section class="">
  <div class="bg-contact">
    <div class="contact m-5 w-100">
      <p class="text-responsive fw-bold m-0 d-inline-block text-start ">
        Vous avez un spectacle ou un évènement à chorégraphier ?
      </p>
    </div>
    <a class="position-button custom-button mb-5" href="contact.php">Contactez-moi</a>
  </div>
</section>


</main>


<?php

require_once __DIR__ . '/layout/footer.php';
