

    <div
        class="flex flex-col lg:flex-row justify-around items-start lg:items-center gap-4 mb-4 "
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="1000">
        <!-- Card -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col  items-center group transition-all duration-300 hover:shadow-yellow-700 hover:scale-105">
            <!-- Image -->
            <div class="w-full h-48 overflow-hidden">
                <img
                    src="uploads/<?php echo $item['picture_services']; ?>"
                    alt="<?php echo $item['title_services']; ?>"
                    class="w-full h-full object-cover" />
            </div>
            <!-- Card Body -->
            <div class="p-4 text-center flex-1 flex flex-col justify-between">
                <h3 class="text-lg font-bold text-titre flex-grow">
                    <a
                        href="prestation.php?id=<?php echo $item['id_services']; ?>"
                        class="no-underline text-gray-800 hover:text-yellow-700">
                        <?php echo $item['title_services']; ?>
                    </a>
                </h3>
            </div>
        </div>
    </div>
