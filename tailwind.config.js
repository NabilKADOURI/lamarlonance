/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php", 
    "./*layout.php",
    "./functions/**/*.php",
    "./template/**/*.php",
    "./uploads/**/*.php",
    "./css/**/*.css",
    "./js/**/*.js" 
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
    require('tailwindcss-textshadow'),
    require('@tailwindcss/line-clamp')
  ],
}

