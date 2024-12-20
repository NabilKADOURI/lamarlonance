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
        titre: "#DEBB4D", // Couleur personnalisée pour les titres
        texte: "#333333", // Couleur personnalisée pour les textes
        primary: "#ff6600", // Couleur principale pour boutons et accents
        secondary: "#e65c00", // Couleur secondaire pour hover
        background: "#f9fafb", // Couleur de fond clair
      },
      fontFamily: {
        texte: ['Montserrat', 'sans-serif'], // Police pour les textes
        titre: ['Lobster', 'cursive'], // Police pour les titres
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideIn: {
          '0%': { transform: 'translateX(-100%)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' },
        },
      },
      animation: {
        fadeIn: 'fadeIn 1s ease-in-out',
        slideIn: 'slideIn 1s ease-in-out',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'), // Pour styliser les formulaires
    require('@tailwindcss/typography'), // Pour le contenu textuel riche
    require('@tailwindcss/aspect-ratio'), // Pour les ratios des images
  ],
};
