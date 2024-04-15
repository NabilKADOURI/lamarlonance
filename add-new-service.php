<?php
 

require_once __DIR__ . '/layout/header.php';
?>


<div class="row justify-content-center gap-5 flex-lg-wrap  ">
        <form method="POST" enctype="multipart/form-data" action="add-process-service.php" >
            <div>
                <label for="title">Titre</label><br>
                <input type="text" name="title" /> <br><br>

                <label for="description">Description</label><br>
                <textarea type="text" name="description" id="description" rows="5" cols="20"> </textarea>
            </div>

            <label for="picture"> Photo :</label>
            <input  type="file" name="picture"  /><br><br>
            <input class="btn" type="submit" value="Envoyer" />
        </form>
