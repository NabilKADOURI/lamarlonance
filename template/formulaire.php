<div class="col-lg-12 col-md-12 d-flex justify-content-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
<form method="post" action="contact-process.php">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="first_name" class="form-label fw-bold text-black">Nom</label>
                <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="name">
                <div id="first_name" class="form-text"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="last_name" class="form-label fw-bold text-black">Prénom</label>
                <input type="text" name="last_name" class="form-control" id="last_name" aria-describedby="prenom">
                <div id="last_name" class="form-text"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="email" class="form-label fw-bold text-black">Adresse email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                <div id="email" class="form-text">Votre e-mail ne sera pas diffusé.</div>
            </div>
        </div>
    </div>

    <div class="col-3">
            <div class="mb-3">
                <label for="object" >Objet de la demande</label>
            <select name="object" id="object" class=" form-select-lg text-black " >
         
          <option >Demande d'informations</option>
          <option >Demande de devis</option>
          
        </select>
            </div>
        </div>

    <div class="mb-3">
        <label for="message" class="fw-bold">Message</label>
        <textarea class="form-control" name="message" placeholder="Laissez-moi un commentaire !" id="message" style="height: 100px"></textarea>
    </div>

    <button type="submit"   class="btn mb-5">Envoyer</button>
</form>
</div>