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
                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nom
                    </label>
                    <input
                        type="text"
                        name="first_name"
                        id="first_name"
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#ff6600] focus:border-transparent"
                        placeholder="Votre nom" />
                </div>

                <!-- Prénom -->
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                        Prénom
                    </label>
                    <input
                        type="text"
                        name="last_name"
                        id="last_name"
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#ff6600] focus:border-transparent"
                        placeholder="Votre prénom" />
                </div>
            </div>

            <!-- Adresse email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Adresse email
                </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="w-full bg-gray-50 border border-[#ff6600] rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#ff6600] focus:border-transparent"
                    placeholder="exemple@domaine.com" />
                <p class="text-xs text-gray-500 mt-2">Votre e-mail ne sera pas diffusé.</p>
            </div>

            <!-- Objet de la demande -->
            <div class="mb-6">
                <label for="object" class="block text-sm font-medium text-gray-700 mb-2">
                    Objet de la demande
                </label>
                <select
                    name="object"
                    id="object"
                    class="w-full bg-gray-50 border border-[#ff6600] rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#ff6600] focus:border-transparent">
                    <option>Demande d'informations</option>
                    <option>Demande de devis</option>
                </select>
            </div>

            <!-- Message -->
            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                    Message
                </label>
                <textarea
                    name="message"
                    id="message"
                    class="w-full bg-gray-50 border border-gray-300 rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#ff6600] focus:border-transparent"
                    placeholder="Laissez-moi un commentaire !"
                    rows="4"></textarea>
            </div>

            <!-- Bouton Submit -->
            <div class="text-center">
                <button
                    type="submit"
                    class="bg-titre hover:bg-[#ff6600] text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105 shadow-md">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</section>
