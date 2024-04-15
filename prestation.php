<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/layout/nav.php';
require_once __DIR__ . '/classes/Service.php';

$id = $_GET['id'];

$service = Service::getService($id);

?>

<main class="border-top border-bottom border-black border-3  mb-4">
    <div class="container ">
        <div class="row align-items-center ">
                <div class="col-lg-4 my-4 " data-aos="fade-right">
                    <div>
                        <img class="rounded-4" src="uploads/<?php echo $service['picture_services'];?>" alt="<?php echo $service['title_services']; ?>" width="400px" height="300px" />
                    </div>
                </div>
                <div class=" col-lg-8 col-md-12 my-5 justify-content-center " data-aos="fade-left">
                    <h1 class="title-or "><?php echo $service['title_services']; ?></h1>
                    <p><?php echo $service['description_services']; ?></p>
                </div>
        </div>
    </div>
</main>

<?php require_once 'layout/footer.php';