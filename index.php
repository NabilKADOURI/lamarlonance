<?php

$title = "lamarlonance";
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

?>

<main>
    <!-- Partie Hero -->
    <section>
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center justify-center my-3 pt-5">
                <!-- Texte principal -->
                <div class="lg:w-2/3 md:w-1/2 w-full text-center my-4 order-2 lg:order-1">
                    <div class="mb-5">
                        <h1 class="text-5xl font-bold  ">Lamarlonance</h1>
                    </div>
                    <p class="text-lg">DANSEUR CHOREGRAPHE LYON</p>
                    <div class="my-5">
                        <a href="#prestations" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition">
                            VOIR LES PRESTATIONS
                        </a>
                    </div>
                </div>
                <!-- Image principale -->
                <div class="lg:w-1/3 md:w-1/2 w-full flex justify-center order-1 lg:order-2 mt-5">
                    <img class="h-80 w-80 object-cover rounded-lg" src="/lamarlonance/Image/fond-marlon.png" alt="fond Marlon" />
                </div>
            </div>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="border-t border-b border-gray-800 bg-gray-100 mb-4">
        <div class="container mx-auto px-4 py-10">
            <div class="flex flex-col lg:flex-row items-center justify-between space-y-8 lg:space-y-0">
                <!-- Image -->
                <div class="lg:w-1/2 w-full" data-aos="fade-right">
                    <img class="rounded-lg w-full h-auto" src="/lamarlonance/Image/marlon-cours.png" alt="marlon cours de danse">
                </div>
                <!-- Texte -->
                <div class="lg:w-1/2 w-full text-center lg:text-left space-y-4" data-aos="fade-left">
                    <h2 class="text-4xl font-bold text-gray-800">Marlon KAMBA</h2>
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
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-3">Une passion : danser et faire danser</h2>
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
        <div class="bg-gray-800 text-white py-16">
            <div class="container mx-auto px-4 flex flex-col items-center space-y-6">
                <p class="text-center text-2xl font-semibold">
                    Vous avez un spectacle ou un évènement à chorégraphier ?
                </p>
                <a href="contact.php" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg transition">
                    Contactez-moi
                </a>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/layout/footer.php';
?>
