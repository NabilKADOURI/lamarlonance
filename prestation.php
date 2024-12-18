<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

$id = $_GET['id'];

$service = Service::getService($id);

?>

<main class="border-t-4 border-b-4 border-black mb-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center">
            <!-- Image de service -->
            <div class="w-full lg:w-1/3 my-6" data-aos="fade-right">
                <div>
                    <img 
                        class="rounded-lg shadow-lg" 
                        src="uploads/<?php echo $service['picture_services']; ?>" 
                        alt="<?php echo $service['title_services']; ?>" 
                        width="400" 
                        height="300"
                    />
                </div>
            </div>
            <!-- Description de service -->
            <div class="w-full lg:w-2/3 my-6" data-aos="fade-left">
                <h1 class="text-yellow-600 text-3xl font-bold mb-4">
                    <?php echo $service['title_services']; ?>
                </h1>
                <p class="text-gray-700 text-lg">
                    <?php echo $service['description_services']; ?>
                </p>
            </div>
        </div>
    </div>
</main>

<?php require_once 'layout/footer.php'; ?>
