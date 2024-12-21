<?php

$title = "lamarlonance";
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

?>

<main class="overflow-x-hidden">
    <!-- Section Hero -->
    <section class="py-10">
        <div class="container mx-auto h-[450px] md:h-[550px]">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-8 lg:space-y-0 lg:space-x-8">
                <!-- Texte principal -->
                <div class="text-center lg:text-left ">
                    <h1 class="text-4xl sm:text-9xl font-titre text-titre font-bold leading-tight">
                        Lamarlonance
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mt-4">
                        DANSEUR CHORÉGRAPHE LYON
                    </p>
                    <div class="mt-6">
                        <a href="#prestation" 
                           class="px-6 py-3 bg-[#ff6600] hover:bg-titre text-white hover:text-white rounded-lg shadow-md transition duration-300 font-semibold">
                            VOIR LES PRESTATIONS
                        </a>
                    </div>
                </div>

                <!-- Image principale -->
                <div class=" flex justify-center animate-slideIn">
                    <img class="w-[250px] md:w-[300px] lg:w-[400px] h-auto relative z-10 rounded-full object-cover max-w-full" 
                         src="Image/fond-marlon.webp" alt="Image de Marlon">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="border-t border-b border-gray-200 bg-gray-100 mb-4">
        <div class="container mx-auto px-4 py-10">
            <div class="flex flex-col lg:flex-row items-center justify-between lg:space-x-8 space-y-8 lg:space-y-0">
                <!-- Image -->
                <div class="lg:w-1/2 w-full flex justify-center" data-aos="fade-right">
                    <img class="rounded-lg w-full max-w-[500px] h-auto shadow-md max-w-full" src="Image/marlon-cours.webp" alt="Marlon cours de danse">
                </div>
                <!-- Texte -->
                <div class="lg:w-1/2 w-full text-center lg:text-left space-y-4" data-aos="fade-left">
                    <h2 class="text-4xl font-bold ">Marlon KAMBA</h2>
                    <h3 class="text-2xl font-semibold text-[#ff6600]">Créateur de mouvement</h3>
                    <p class="leading-relaxed text-gray-600 text-lg">
                        Laissez-vous transporter par la magie de Marlon, champion du monde de bachata et artiste accompli !
                        Marlon, danseur émérite certifié par le Ministère de la Culture de la République Dominicaine, vous invite à un voyage dans le monde vibrant de la bachata.
                        Sa passion et son talent, conjugués à une expertise unique, vous offriront une expérience inoubliable.
                        Artiste pluridisciplinaire, Marlon ne se limite pas à un seul style. Sa maîtrise des danses Bachata, salsa, Afro, house, Moderne jazz lui permettent de créer des performances uniques et captivantes.
                    </p>
                </div>
            </div>
        </div>
        <div class="pt-20" id="prestation"></div>
    </section>

    <!-- Section Prestations -->
    <section class="container mx-auto px-4 ">
    <div >
        <div class="text-center mb-10" data-aos="zoom-in">
            <h2 class="text-3xl lg:text-4xl font-bold mb-3">Une passion : danser et faire danser</h2>
            <p class="text-lg font-medium text-gray-600">
                <b>Vous avez un défi à relever ? Marlon transpose son talent de danseur sur des projets imaginés et conçus sur mesure.</b>
            </p>
        </div>

        <div class="  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
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
        <div class="bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500 text-white py-10 border-y-8 border-titre">
            <div class="container mx-auto flex flex-col items-center space-y-8 text-center">
                <!-- Titre -->
                <h2 class="text-3xl md:text-4xl font-medium text-white">
                    Vous avez un spectacle ou un évènement à chorégraphier ?
                </h2>
                <!-- Bouton -->
                <a href="contact.php" 
                   class="bg-white font-bold text-orange-600 py-3 px-8 rounded-full shadow-lg hover:bg-titre hover:text-white transition duration-300 transform hover:scale-105 border-4 border-titre">
                    Contactez-moi
                </a>
            </div>
        </div>
    </section>
</main>