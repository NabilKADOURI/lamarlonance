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
      colors: {
        titre: "#DEBB4D", // Couleur pour les titres
        texte: "#333333", // Couleur pour les textes
        button: "#DEBB4D", // Couleur pour les boutons
        "button-hover": "#d4a63f", // Couleur pour le survol des boutons
      },
      fontFamily: {
        texte: ['Montserrat', 'sans-serif'], // Police pour les textes
        titre: ['Lobster', 'cursive'], // Police pour les titres
      },
    },
  },
  plugins: [],
};
