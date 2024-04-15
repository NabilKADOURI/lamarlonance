<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Contacts.php';


$id = $_GET['id'];

$contact = Contacts::getMessage($id);

?>

<main class="border-top border-bottom border-black border-3  mb-4">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-2 my-4 " data-aos="fade-right">
                <h3><?php echo $contact['first_name_contact']; ?></h3>
            </div>

            <div class="col-lg-2 my-4 " data-aos="fade-right">
                <h3><?php echo $contact['last_name_contact']; ?></h3>
            </div>
            <h4><?php echo $contact['object_contact']; ?></h4>
        </div>

        <div class="row ">
            <div class="col-lg-10 my-4 " data-aos="fade-right">

                <p><?php echo $contact['message_contact']; ?></p> <br> <br>

                <p><?php echo $contact['date_contact']; ?></p>

                <h5><?php echo $contact['email_contact']; ?></h5>
            </div>
        </div>

        <div><a class="text-decoration-none" href="index-admin.php"><span>Retour <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <path fill="#debb4d" d="M19 7.766c0-1.554-1.696-2.515-3.029-1.715l-7.056 4.234c-1.295.777-1.295 2.653 0 3.43l7.056 4.234c1.333.8 3.029-.16 3.029-1.715zM9.944 12L17 7.766v8.468zM6 6a1 1 0 0 1 1 1v10a1 1 0 1 1-2 0V7a1 1 0 0 1 1-1" />
                </svg></span></a>
        </div>
    </div>
</main>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    AOS.init();
</script>

</body>

</html>