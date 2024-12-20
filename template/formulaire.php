<section class="py-16 bg-white">
    <div
        class="w-full flex justify-center"
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="1000">
        <form method="post" action="contact-process.php" class="w-full max-w-3xl bg-white rounded-lg shadow-lg p-8 border border-gray-200">
            <h1 class="text-4xl font-bold text-center mb-6">Contactez-moi</h1>

            <!-- Première ligne : Nom et Prénom -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Nom -->
                <div>
                    <label for="first_name" class="form-label">Nom</label>
                    <input
                        type="text"
                        name="first_name"
                        id="first_name"
                        class="input-field border-[#ff6600] focus:border-[#e65c00] focus:ring-[#e65c00]"
                        placeholder="Votre nom" />
                </div>

                <!-- Prénom -->
                <div>
                    <label for="last_name" class="form-label">Prénom</label>
                    <input
                        type="text"
                        name="last_name"
                        id="last_name"
                        class="input-field border-[#ff6600] focus:border-[#e65c00] focus:ring-[#e65c00]"
                        placeholder="Votre prénom" />
                </div>
            </div>

            <!-- Adresse email -->
            <div class="mb-6">
                <label for="email" class="form-label">Adresse email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="input-field border-[#ff6600] focus:border-[#e65c00] focus:ring-[#e65c00]"
                    placeholder="exemple@domaine.com" />
                <p class="text-xs text-gray-500 mt-2">Votre e-mail ne sera pas diffusé.</p>
            </div>

            <!-- Objet de la demande -->
            <div class="mb-6">
                <label for="object" class="form-label">Objet de la demande</label>
                <select
                    name="object"
                    id="object"
                    class="input-field border-[#ff6600] focus:border-[#e65c00] focus:ring-[#e65c00]">
                    <option>Demande d'informations</option>
                    <option>Demande de devis</option>
                </select>
            </div>

            <!-- Message -->
            <div class="mb-6">
                <label for="message" class="form-label">Message</label>
                <textarea
                    name="message"
                    id="message"
                    class="input-field border-[#ff6600] focus:border-[#e65c00] focus:ring-[#e65c00]"
                    placeholder="Laissez-moi un commentaire !"
                    rows="4"></textarea>
            </div>

            <!-- Bouton Submit -->
            <div class="text-center ">
    <button 
        type="submit" 
        class="btn-primary ">
        Envoyer
    </button>
</div>

        </form>
    </div>
</section>
