<div class="col-lg-3 col-md-5 d-flex justify-content-around mb-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
    <div class="card d-flex align-items-center" style="width: 18rem;">
        <img src="uploads/<?php echo $item['picture_services']; ?>" class="img-fluid" alt="<?php echo $item['title_services'];?>" />
        <div class="card-body d-flex align-items-center ">
            <h3 class="card-title text-center ">
                <a class="text-decoration-none text-dark fw-bold" href="prestation.php?id=<?php echo $item['id_services']; ?>"><?php echo $item['title_services']; ?></a>
            </h3>
        </div>
    </div>
</div>