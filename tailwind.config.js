/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./src/**/*.{php,html,js}",
    "./layout/**/*.php",
    "./functions/**/*.php",
    "./template/**/*.php",
    "./uploads/**/*.php",
    "./js/**/*.js",
    "./css/**/*.css",
  ],
  theme: {
    extend: {
      colors:{
        titre : "#DEBB4D",
        nav: "#3A393C"
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

