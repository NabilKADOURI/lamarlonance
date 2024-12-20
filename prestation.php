<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

$id = $_GET['id'];

$service = Service::getService($id);

if (!$service) {

    header("HTTP/1.0 404 Not Found");
    echo "Service introuvable.";
    exit;
}
?>

<main class="bg-gray-100 py-20">
    <div class="container mx-auto px-6 ">
        <div class="flex flex-wrap lg:flex-nowrap items-center gap-10">
            <!-- Image de service -->
            <div class="w-full lg:w-1/2" data-aos="fade-right" data-aos-duration="1200">
                <div class="mb-5 justify-items-center">
                    <img
                        class="rounded-lg shadow-xl transition-transform duration-500 hover:scale-110  "
                        src="uploads/<?php echo $service['picture_services']; ?>"
                        alt="<?php echo $service['title_services']; ?>"
                        width="500"
                        height="400" />

                </div>

                <!-- Description de service -->
                <div class="w-full  lg:w-1/2 space-y-8" data-aos="fade-left" data-aos-duration="1200">
                    <h1 class="text-3xl md:text-5xl font-bold leading-tight ">
                        <?php echo $service['title_services']; ?>
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        <?php echo $service['description_services']; ?>
                    </p>
                    <div class="flex items-center justify-center gap-4 ">
                        <a
                            href="contact.php"
                            class="px-8 py-3 bg-[#ff6600] hover:bg-[#e65c00] text-white text-lg font-medium rounded-lg shadow-lg transition-all duration-300">
                            Contactez-nous
                        </a>
                        <a
                            href="prestation.php?id=<?php echo Service::getRandomServiceId($id); ?>"
                            class="px-8 py-3 border border-gray-300 hover:border-[#ff6600] text-gray-700 hover:text-[#ff6600] text-lg font-medium rounded-lg shadow-md transition-all duration-300">
                            Voir d'autres services
                        </a>

                    </div>
                </div>
            </div>
        </div>
</main>

<?php require_once 'layout/footer.php'; ?>