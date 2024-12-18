<?php 
require_once 'layout/header.php'; 
require_once 'layout/nav.php';
?>

<main>
    <!-- Container principal -->
    <div class="container mx-auto px-4 py-8">
        <!-- Flexbox pour aligner image et texte -->
        <div class="flex flex-col lg:flex-row justify-center items-center gap-8">
            <!-- Colonne Image -->
            <div class="w-full lg:w-1/2 my-5 flex justify-center">
                <img src="/Image/about-marlon.webp" alt="Image de Marlon Kamba" class="w-full h-auto max-w-sm lg:max-w-full  bg-white rounded-lg shadow-md overflow-hidden flex flex-col  items-center group transition-all duration-300 hover:shadow-titre hover:scale-105">
            </div>
            <!-- Colonne Texte -->
            <div class="w-full lg:w-1/2 text-gray-800">
                <h1 class="text-3xl font-bold  mb-4">Qui je suis ?</h1>
                <p class="mb-4">
                    Hey ! Je m'appelle Marlon KAMBA. Professeur de danse depuis près de 17 ans maintenant.
                </p>
                <p class="mb-4">
                    J'ai commencé la danse à l'âge de 13 ans dans le plus grand des hasards. J'ai effectué mes premières classes de danse dans le milieu du hip-hop, en France et à l'étranger notamment aux USA.
                </p>
                <p class="mb-4">
                    Après avoir bien baroudé dans ce milieu, j'ai découvert tout naturellement d'autres styles de danse. Notamment le Bachata, la salsa, la danse Afro, la house, le Moderne jazz, auxquelles je me suis ouvert et me suis formé à travers mes différentes rencontres et voyages dans le monde.
                </p>
                <p class="mb-4">
                    Aujourd'hui, je mets mes compétences à votre service afin de vous accompagner dans vos différents projets : Ouverture de bal, EVJF, EVG, Workshop pour festival ou soirée...
                </p>
                <p class="mb-4">
                    Si vous souhaitez apprendre et évoluer avec un champion du monde de Bachata, certifié par le ministre de la culture de la République Dominicaine, n’hésitez plus.
                </p>
                <p class="font-semibold text-yellow-700">
                    Lamarolance est là pour vous accompagner !
                </p>
            </div>
        </div>
    </div>
</main>

<?php require_once 'layout/footer.php'; ?>
