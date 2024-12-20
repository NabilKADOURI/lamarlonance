<div
    class="flex flex-col lg:flex-row justify-around items-start lg:items-center gap-4 mb-4"
    data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="1000">
    <!-- Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col items-center group transition-all duration-300 hover:shadow-lg hover:scale-125">
        <!-- Image -->
        <div class="w-full h-48 overflow-hidden relative">
        <?php
            // Sécurisation des données dynamiques
            $picture = htmlspecialchars($item['picture_services'] ?? 'default.jpg', ENT_QUOTES, 'UTF-8');
            $title = htmlspecialchars($item['title_services'] ?? 'Titre non disponible', ENT_QUOTES, 'UTF-8');
            $id = intval($item['id_services'] ?? 0);
            ?>
            <img
                src="uploads/<?php echo $item['picture_services']; ?>"
                alt="<?php echo $item['title_services']; ?>"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                
            <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
        <!-- Card Body -->
        <div class="p-4 text-center flex-1 flex flex-col justify-between">
            <h3 class="text-lg font-bold text-gray-800 flex-grow">
                <a
                    href="prestation.php?id=<?php echo $item['id_services']; ?>"
                    class="no-underline text-gray-800 hover:text-titre transition-colors duration-300">
                    <?php echo $item['title_services']; ?>
                </a>
            </h3>
        </div>
    </div>
</div>
