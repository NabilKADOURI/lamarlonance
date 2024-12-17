<section>
    <div
        class="w-full flex justify-center"
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="1000">
        <form method="post" action="contact-process.php" class="w-full max-w-4xl">
            <!-- Première ligne : Nom et Prénom -->
            <div class="flex flex-wrap -mx-3 mb-6">
                <!-- Nom -->
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="first_name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Nom
                    </label>
                    <input
                        type="text"
                        name="first_name"
                        id="first_name"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        placeholder="Votre nom" />
                </div>

                <!-- Prénom -->
                <div class="w-full md:w-1/2 px-3">
                    <label for="last_name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Prénom
                    </label>
                    <input
                        type="text"
                        name="last_name"
                        id="last_name"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        placeholder="Votre prénom" />
                </div>
            </div>

            <!-- Adresse email -->
            <div class="w-full px-3 mb-6">
                <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Adresse email
                </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    placeholder="exemple@domaine.com" />
                <p class="text-gray-600 text-xs italic">Votre e-mail ne sera pas diffusé.</p>
            </div>

            <!-- Objet de la demande -->
            <div class="w-full md:w-1/3 px-3 mb-6">
                <label for="object" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Objet de la demande
                </label>
                <div class="relative">
                    <select
                        name="object"
                        id="object"
                        class="block appearance-none w-full bg-gray-200 border border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                        <option>Demande d'informations</option>
                        <option>Demande de devis</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5.516 7.548a.625.625 0 01.866 0L10 11.166l3.618-3.618a.625.625 0 11.866.866l-4 4a.625.625 0 01-.866 0l-4-4a.625.625 0 010-.866z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Message -->
            <div class="w-full px-3 mb-6">
                <label for="message" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Message
                </label>
                <textarea
                    name="message"
                    id="message"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    placeholder="Laissez-moi un commentaire !"
                    rows="4"></textarea>
            </div>

            <!-- Bouton Submit -->
            <div class="flex justify-end px-3">
                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</section>