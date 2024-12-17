<!-- Navbar Responsive en Tailwind CSS -->
<nav id="navbar" class="fixed w-full z-50 transition duration-300 m-auto ">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center ">
    <!-- Logo -->
    <a href="#" class="flex items-center">
      <img src="/lamarlonance/Image/logo-lamarlonance.png" class="h-12 " alt="Logo lamarlonance" loading="lazy" />
    </a>

    <!-- Toggle Button (Menu Burger) -->
    <button id="menu-toggle" class="block lg:hidden text-gray-800 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <!-- Menu Links -->
  <div id="menu" class="hidden lg:flex flex-col lg:flex-row lg:items-center bg-white lg:bg-transparent lg:gap-6">
    <a href="index.php" class="block py-2 px-4 text-gray-700 hover:text-yellow-500 transition duration-200">Accueil</a>
    <a href="#prestations" class="block py-2 px-4 text-gray-700 hover:text-yellow-500 transition duration-200">Prestation</a>
    <a href="#" class="block py-2 px-4 text-gray-700 hover:text-yellow-500 transition duration-200">Galerie</a>
    <a href="about.php" class="block py-2 px-4 text-gray-700 hover:text-yellow-500 transition duration-200">A propos</a>
    <a href="contact.php" class="block py-2 px-6 text-white bg-yellow-500 rounded-full hover:bg-yellow-600 transition duration-300 font-bold text-center">Contact</a>
  </div>
</nav>
