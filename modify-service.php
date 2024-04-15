<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';



$id = $_GET['id'];

$services = Service::getService($id);
?>


<form method="POST" enctype="multipart/form-data" action="modify-process-services.php">

    <label for="title">Titre</label><br>
    <input type="text" name="title"  value="<?php echo $services['title_services']; ?>" /> <br><br>

    <label for="description">Description</label>
    <br>
    <textarea type="text" name="description" rows="5" cols="20"><?php echo $services['description_services'];?></textarea>
            
    <input type="hidden" name="id" value="<?php echo $services['id_services']; ?>"><br> <br>
    <label for=" picture"> Photo :</label>
    <input  type="file" name="picture" id="picture"/>
    <br><br>
    <input class="btn" type="submit" value="Modifier"/>
</form>

</body>
</html>