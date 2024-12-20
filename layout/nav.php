<header class="sticky left-0 top-0 z-50 w-full ">
  <nav class="top-0 left-0 w-full bg-white/30 backdrop-blur-md z-50 border-b-2 border-yellow-500">
    <div class="flex flex-wrap items-center justify-between container mx-auto py-2 lg:py-4 px-4 sm:px-6 lg:px-12">
      <!-- Logo -->
      <a href="#" id="logo" class="flex items-center space-x-3 ">
        <img src="Image/logo-lamarlonance.webp" class="h-12 
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
      <div id="navbar-menu" class="hidden w-full sm:flex sm:w-auto justify-center items-center">
    <ul class="flex flex-col md:flex-row sm:justify-center items-center space-y-4 sm:space-y-0 sm:space-x-2 font-bold text-gray-600">
        <li><a href="index.php" class="block py-2 px-4 hover:text-titre <?php echo basename($_SERVER['SCRIPT_NAME']) == 'index.php' ? 'active' : ''; ?>">ACCUEIL</a></li>
        <li><a href="about.php" class="block py-2 px-4 hover:text-titre <?php echo basename($_SERVER['SCRIPT_NAME']) == 'about.php' ? 'active' : ''; ?>">À PROPOS</a></li>
        <li><a href="index.php#prestation" class="block py-2 px-4 hover:text-titre <?php echo basename($_SERVER['SCRIPT_NAME']) == 'services-item.php' ? 'active' : ''; ?>">PRESTATIONS</a></li>
        <li><a href="gallery.php" class="block py-2 px-4 hover:text-titre <?php echo basename($_SERVER['SCRIPT_NAME']) == 'gallery.php' ? 'active' : ''; ?>">GALERIE</a></li>
        <li><a href="contact.php" class="block py-2 px-4 hover:text-titre <?php echo basename($_SERVER['SCRIPT_NAME']) == 'contact.php' ? 'active' : ''; ?>">CONTACT</a></li>
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
