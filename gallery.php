<?php
require_once 'layout/header.php';
require_once 'layout/nav.php';
?>
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Titre de la galerie -->
        <div class="text-center mb-10" data-aos="fade-up">
        <h1 class="text-4xl font-bold text-center mb-6">Galerie</h1>
            <p class="text-lg font-medium text-gray-600">
                Découvrez les moments mémorables capturés lors des événements de Marlon.
            </p>
        </div>

        <!-- Galerie -->
        <div class="grid grid-cols-1 gap-6" data-aos="fade-up" data-aos-delay="200">
            <!-- Image principale -->
            <div class="relative flex justify-center">
                <img 
                    id="mainImage"
                    class="w-full max-w-md md:max-w-lg lg:max-w-xl h-auto object-cover rounded-lg shadow-lg hover:shadow-xl transition duration-300"
                    src="/Image/bacha.webp"
                    alt="flashmobe">
            </div>

            <!-- Miniatures -->
            <div class="grid grid-cols-5 gap-4">
                <div class="relative group">
                    <img 
                        onclick="changeImage(this)"
                        class="w-full h-24 sm:h-28 md:h-32 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300 cursor-pointer"
                        src="/Image/couple.webp"
                        alt="couple mariage">
                </div>
                <div class="relative group">
                    <img 
                        onclick="changeImage(this)"
                        class="w-full h-24 sm:h-28 md:h-32 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300 cursor-pointer"
                        src="/Image/dance.webp"
                        alt="duo dance marlon">
                </div>
                <div class="relative group">
                    <img 
                        onclick="changeImage(this)"
                        class="w-full h-24 sm:h-28 md:h-32 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300 cursor-pointer"
                        src="/Image/eleve.webp"
                        alt="photo des élèves">
                </div>
                <div class="relative group">
                    <img 
                        onclick="changeImage(this)"
                        class="w-full h-24 sm:h-28 md:h-32 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300 cursor-pointer"
                        src="/Image/gospel.webp"
                        alt="photo événement gospel">
                </div>
                <div class="relative group">
                    <img 
                        onclick="changeImage(this)"
                        class="w-full h-24 sm:h-28 md:h-32 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300 cursor-pointer"
                        src="/Image/bacha.webp"
                        alt="flashmobe">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Fonction pour changer l'image principale
    function changeImage(image) {
        const mainImage = document.getElementById('mainImage');
        mainImage.src = image.src;
        mainImage.alt = image.alt;
    }
</script>

<?php require_once 'layout/footer.php'; ?>
