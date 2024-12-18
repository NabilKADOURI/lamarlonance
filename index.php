<?php

$title = "lamarlonance";
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

?>

<main>
    <!-- Partie Hero -->
    <section class="bg-[url('/Image/fond.webp')]">
        <div class="container ">
            <div class="flex flex-col lg:flex-row items-center justify-center">
                <!-- Texte principal -->
                <div class="text-center my-4   flex flex-col justify-center">
                    <div class="mb-5 ">
                        <h1 class="text-5xl md:text-10xl font-titre text-titre font-medium relative inline-block classy-effect ">
                            Lamarlonance
                        </h1>
                    </div>

                    <p class="text-lg">DANSEUR CHOREGRAPHE LYON</p>
                    <div class="my-5">
                        <a href="#prestations" class="btn">
                            VOIR LES PRESTATIONS
                        </a>
                    </div>
                </div>
                <!-- Image principale -->
              
                    <img class="" src="/Image/img-marlon.webp" alt="image de Marlon" />
                
            </div>
        </div>
    </section>


<!-- Section Présentation -->
<section class="border-t border-b border-gray-800 bg-gray-100 mb-4">
    <div class="container mx-auto px-4 py-10">
        <div class="flex flex-col lg:flex-row items-center justify-between space-y-8 lg:space-y-0">
            <!-- Image -->
            <div class="lg:w-1/2 w-full" data-aos="fade-right">
                <img class="rounded-lg w-full h-auto" src="/Image/marlon-cours.webp" alt="marlon cours de danse">
            </div>
            <!-- Texte -->
            <div class="lg:w-1/2 w-full text-center lg:text-left space-y-4" data-aos="fade-left">
                <h2 class="text-4xl font-bold ">Marlon KAMBA</h2>
                <h3 class="text-2xl font-semibold text-gray-600">Créateur de mouvement</h3>
                <p class="leading-relaxed text-gray-700 text-lg">
                    Laissez-vous transporter par la magie de Marlon, champion du monde de bachata et artiste accompli ! <br>
                    Marlon, danseur émérite certifié par le Ministère de la Culture de la République Dominicaine, vous invite à un voyage dans le monde vibrant de la bachata. Sa passion et son talent, conjugués à une expertise unique, vous offriront une expérience inoubliable. <br>
                    Artiste pluridisciplinaire, Marlon ne se limite pas à un seul style. Sa maîtrise des danses Bachata, salsa, Afro, house, Moderne jazz lui permettent de créer des performances uniques et captivantes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section Prestations -->
<section class="container mx-auto px-4">
    <div class="container mx-auto px-4" id="prestation">
        <div class="text-center mb-10" data-aos="zoom-in">
            <h2 class="text-3xl lg:text-4xl font-bold mb-3">Une passion : danser et faire danser</h2>
            <p class="text-lg font-medium text-gray-600">
                <b>Vous avez un défi à relever ? Marlon transpose son talent de danseur sur des projets imaginés et conçus sur mesure.</b>
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-6 ">
            <?php
            $services = Service::getServiceAll();
            foreach ($services as $item) {
                require 'template/services-item.php';
            }
            ?>
        </div>
    </div>
</section>

<!-- Section Contact -->
<section>
<div class="bg-gradient-contact text-white py-16">
    <div class=" flex flex-col items-center space-y-6">
        <p class="text-center text-2xl font-semibold text-white">
            Vous avez un spectacle ou un évènement à chorégraphier ?
        </p>
        <a href="contact.php" class="btn text-white py-3 px-6 rounded-lg transition">
            Contactez-moi
        </a>
    </div>
</div>

</section>
</main>

<?php
require_once __DIR__ . '/layout/footer.php';
?>