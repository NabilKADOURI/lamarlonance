<header class="sticky left-0 top-0 z-50 w-full ">
  <nav class="bg-white border-b border-gray-200 shadow-md bg-opacity-50 backdrop-blur-md ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between container mx-auto p-2">
      <!-- Logo -->
      <a href="#" id="logo" class="flex items-center space-x-3 ">
        <img src="/lamarlonance/image/logo-lamarlonance.webp" class="h-10 md:h-52
        " alt="Logo lamarlonance" />
        <span class="self-center text-2xl font-semibold text-gray-800"></span>
      </a>

      <!-- Bouton menu burger -->
      <button
        id="burger-button"
        type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-black rounded-lg sm:hidden hover:bg-gray-100 focus:ring-2 focus:ring-titre ">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <!-- Menu  -->
      <div
        id="navbar-menu"
        class="hidden w-full sm:flex sm:w-auto sm:space-x-4 justify-center items-center ">
        <ul class="flex flex-col sm:flex-row sm:justify-center items-center space-y-4 font-medium ">
          <li><a href="index.php" class="block py-2 px-4 hover:text-titre">ACCEUIL</a></li>
          <li><a href="about.php" class="block py-2 px-4 hover:text-titre active:text-titre">À PROPOS</a></li>
          <li><a href="services.php" class="block py-2 px-4 hover:text-titre">PRESTATIONS</a></li>
          <li><a href="pricing.php" class="block py-2 px-4 hover:text-titre">GALERIE</a></li>
          <li><a href="contact.php" class="block py-2 px-4 hover:text-titre">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Script -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const burgerButton = document.getElementById("burger-button");
    const navbarMenu = document.getElementById("navbar-menu");

    burgerButton.addEventListener("click", () => {
      navbarMenu.classList.toggle("hidden");
    });
  });
</script>